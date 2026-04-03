<?php 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba Principal</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <img src="#" alt="logo">
        </div>
    </nav>
    <main>
        <div class="container">
            <form action="./valida_login.php" method="post">
                <p class="titulo">Login</p>
                <input type="email" name="email" id="email" required>
                <input type="password" name="pass" id="pass" required>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </main>
</body>
</html>