<?php
require_once(__DIR__ . '/../Model/univespModel.php');
require_once(__DIR__ . '/../Model/univespModel.php');


class UnivespController{
    private $ip;
    private $browser;
    private $page;

    public function getAcesso($ip, $browser, $page){
        $model = new UnivespModel();
        $model->insertAcesso($ip, $browser, $page);
    }
}
?>