<?php


    include('registro.php');

    $obj = new Registro;

    $user    = $_POST['inputUser'];
    $pass    = $_POST['inputPassword'];
    $nom     = $_POST['inputNombre'];
    $email   = $_POST['inputCorreo'];

    $res = $obj->registrarUsuario($user, $pass, $nom, $email);

    if($res == 1){
        $datos = array('dato' => 'ok');
        
    }else{
        $datos = array('dato' => 'no');
    }

    echo json_encode($datos, JSON_FORCE_OBJECT);

    



?>