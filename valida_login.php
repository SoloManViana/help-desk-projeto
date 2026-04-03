<?php 

session_start();

$usuarios = array(
        array('id' => 1, 'email' => 'myadmin@mail.com', 'senha' => '1234'),
        array('id' => 2, 'email' => 'youruser@mail.com', 'senha' => 'admin')
);

$usuario_auth = false;

foreach($usuarios as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['pass']){
        $usuario_auth = true;
    }
}

if($usuario_auth){
    $_SESSION['autenticado'] = "SIM";
    //echo "Usuario autenticado com sucesso.";
    header('Location: home.php');
}
else {
    $_SESSION['autenticado'] = "NÃO";
    //echo "Ocorreu um erro durante a autenticação";
    header('Location: index.php?login=erro');
    exit;
}

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

?>