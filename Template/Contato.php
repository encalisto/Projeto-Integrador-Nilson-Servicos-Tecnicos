<?php
    ini_set('error_reporting', 'E_ALL');
    ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Nilson Serviços Técnicos</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/png" href="./imagens/manutencao.png">
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
        <section class="contato">
            <h1>Entre em Contato</h1>
            <p>Preencha o formulário abaixo e entraremos em contato com você o mais rápido possível.</p>

            <form action="mailto:nilsoncalisto@gmail.com" method="post" enctype="text/plain">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="copyright">
                <p>Copyright © 2025. Todos os direitos reservados.</p>
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
