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
    <main>
        <div class="container">
            <form action="consultar_chamado.php" method="post" class="formu">
            <div class="formulario">
                <span class="titulo">Abertura do Chamado</span>
                <p>Título</p>
                <input type="text" placeholder="Insira aqui o título da mensagem..." class="title" name="titulo">
                <p>Categoria</p>
                <select name="categoria" id="list">
                    <option value="Impressora" class="opt">Impressora</option>
                    <option value="Computador" class="opt">Computador</option>
                    <option value="Televisão" class="opt">Televisão</option>
                    <option value="Cafeteira" class="opt">Cafeteira</option>
                    <option value="Frigobar" class="opt">Frigobar</option>
                    <option value="Ar-Condicionado">Ar-Condicionado</option>
                </select>
                <p>Descrição</p>
                <textarea name="descricao" class="desc" rows="5" cols="60"></textarea>

                <div class="btn-form">
                    <div class="butn">
                        <a href="./home.php"><input type="button" value="Voltar" class="back-form" id="back"></a>
                    </div>
                    <div class="butn">
                        <a href="./home.php"><button type="submit" class="back-form">Enviar</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
</body>
</html>