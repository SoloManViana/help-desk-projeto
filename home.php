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

     <div class="container">
      <ul class="chamados">
        <li class="call-list">
            <a href="./abrir_chamado.php"><img src="./assets/criar-chamado.png" alt="Abrir Chamado" class="call"></a>
            <p>Abrir Chamado</p>
        </li>
        <li class="call-list">
            <a href="./consultar_chamado.php"><img src="./assets/lista-chamados.png" alt="Consultar Chamado" class="call"></a>
            <p>Consultar Chamados</p>
        </li>
      </ul>
     </div>

</body>
</html>