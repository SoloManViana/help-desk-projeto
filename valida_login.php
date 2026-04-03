<?php 


$usuarios = array(
        array('id' => 1, 'email' => 'myadmin@mail.com', 'senha' => '1234'),
        array('id' => 2, 'email' => 'youruser@mail.com', 'senha' => 'admin')
);

$usuario_auth = false;

foreach($usuarios as $user){
    if($user['email'] == $_POST['mail'] && $user['senha'] == $_POST['pass']){
        $usuario_auth = true;
    }
}

if($usuario_auth){
    echo "Usuario autenticado com sucesso.";
}
else {
    echo "Ocorreu um erro durante a autenticação";
}

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

?>