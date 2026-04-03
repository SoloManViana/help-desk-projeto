  <?php 
        require_once('./validador_acesso.php');
        echo $_SESSION['autenticado'];
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqui é a home</title>
</head>
<body>
     <?php 
       require_once('./navbar.php');
     ?>

</body>
</html>