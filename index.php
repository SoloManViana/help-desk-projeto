<?php 
       require_once('./validador_acesso.php');
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       require_once('./navbar.php');
    ?>
    <main>
        <div class="container">
            <form action="./valida_login.php" method="post">

            <?php if(isset($_GET['login']) && $_GET['login']== "erro"): ?>
                        <?php http_response_code(404); ?>
                    <div class="text-danger">
                        Usuário ou senha inválido(s).
                    </div>
            <?php endif; ?>

                <p class="titulo">Login</p>
                <div class="container-boxes">
                    <div class="login">
                        <label for=""><p>E-mail</p></label>
                        <input type="email" name="email" id="email" class="input" required>
                    </div>
                    <div class="login">
                        <label for=""><p>Senha</p></label>
                        <input type="password" name="pass" id="pass" class="input" required>
                    </div>
                    <div class="btn-box">
                        <input type="submit" value="Entrar" class="botao">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>