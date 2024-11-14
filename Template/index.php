<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

include('/var/www/Projeto-Integrador-Nilson-Servicos-Tecnicos/Controller/univespController.php');

$controller = new UnivespController();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nilson Serviços Técnicos</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" type="image/png" href="/imagens/manutencao.png">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Servicos.php">Serviços</a></li>
                <li><a href="Contato.php">Contato</a></li>
                <li><a href="https://wa.me/5519981445041?text=Tenho%20interesse%20em%20orçar%20seu%20trabalho" target="_blank" class="orcamento">Orçamento</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Seção de Introdução -->
        <section class="intro">
            <div class="intro-text">
                <h1>Seja Bem-Vindo a Nilson Serviços Técnicos</h1>
                <p>A Nilson Serviços Técnicos oferece soluções de inspeção industrial, atuando com alta precisão desde 2011, garantindo qualidade e segurança nos processos industriais.</p>
                <a href="Servicos.php" class="btn">Saiba mais</a>
            </div>
        </section>

        <!-- Seção de Inspeção -->
        <section class="inspecao">
            <h2>Estamos presentes em dois segmentos de inspeção</h2>
            <p>Atuamos para garantir a segurança operacional, qualidade e eficiência dos seus processos industriais.</p>

            <div class="inspecao-itens">
                <div class="item">
                    <h3>Inspeção Dimensional</h3>
                    <p>A inspeção dimensional garante que os componentes atendam às normas de qualidade e desempenho exigidas.</p>
                </div>

                <div class="item">
                    <h3>Inspeção de Equipamentos</h3>
                    <p>Verificamos as condições operacionais e de segurança de equipamentos industriais, assegurando o seu bom funcionamento.</p>
                </div>
            </div>
        </section>

        <!-- Seção de Clientes -->
        <section class="clientes">
            <h2>Nossos Clientes</h2>
            <div class="clientes-logos">
                <img src="/imagens/cliente1.png" alt="Cliente ASVOTEC">
                <img src="/imagens/cliente2.png" alt="Cliente ABA">
                <img src="/imagens/cliente3.png" alt="Cliente VHS">
                <img src="/imagens/cliente4.png" alt="Cliente ALPHAFER">
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="copyright">
                <p>Copyright © 2024. Todos os direitos reservados.</p>
            </div>
            <div class="contact-info">
                <p>Endereço: José Athanázio Bueno, 345, Remanso Campineiro, Hortolândia - SP</p>
                <p>Telefone: +55 19 98144-5041</p>
                <p>Email: nilsoncalisto@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>
