<?php
// Template/log_access.php

// 1) Calcula a raiz do diretório UNIVESP (sobram: Projeto-Integrador-Qualiend e DashboardUnivesp)
$univespRoot = dirname(__DIR__, 2); 
// dirname(__DIR__)       => caminho até ...\Projeto-Integrador-Qualiend
// dirname(__DIR__, 2)    => sobe mais um nível, até ...\UNIVESP

// 2) Inclui a conexão e o Model do Dashboard
require_once $univespRoot . '/DashboardUnivesp/General/db.php';
require_once $univespRoot . '/DashboardUnivesp/Model/dashboardModel.php';

// 3) Captura dados do acesso
$model   = new DashboardModel();
$so      = $model->getOS($_SERVER['HTTP_USER_AGENT']);
$browser = $model->getBrowser($_SERVER['HTTP_USER_AGENT']);
$ip      = $_SERVER['REMOTE_ADDR'];
$pagina  = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_FILENAME);

// 4) Insere na tabela que o Dashboard consome
$stmt = $model->getDatabase()->prepare("
  INSERT INTO acesso (ip, so, pagina, browser)
  VALUES (:ip, :so, :pagina, :browser)
");
$stmt->execute([
  ':ip'      => $ip,
  ':so'      => $so,
  ':pagina'  => $pagina,
  ':browser' => $browser
]);
