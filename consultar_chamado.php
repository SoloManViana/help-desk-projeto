<?php 
    require_once('./validador_acesso.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados</title>
</head>
<body>
    <?php 
       require_once('./navbar.php');
    ?>
    <?php 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descrição = str_replace('#', '-', $_POST['descricao']);
    ?>
</body>
</html>