<?php
    try{
        $con = new PDO('mysql:host=localhost;dbname=tiendaut',
                        'root',
                        '');

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Conectado a la base de datos <br><br>';

        /*
        Esta parte busca todos los registros de la tabla
        y regresa sólo los nombres
        
        $stmt = $con->prepare('SELECT nombre  FROM usuario');
        $stmt->execute();

        while( $datos = $stmt->fetch() ){
            echo 'Nombre: ' . $datos[0] . '<br>';
        }
        */

        $user = 'Lebron';
        $pass = 'bbbbb';
        $nombre = 'Lebron James';
        $correo = 'lebron@nba.com';


        /*Regresa el registro del usuario Juan
        $user = 'Juan';

        $stmt = $con->prepare('SELECT nombre, email FROM usuario WHERE  nombre=:usuario');
        $stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
        $stmt->execute();
        //$stmt->execute(array(':usuario'=>$user));

        while( $datos = $stmt->fetch() ){
            echo 'Nombre: ' . $datos[0] . '<br>' . 'Correo: ' . $datos[1];
        }
        */


        /*
        //Inserción de un registro
        $stmt = $con->prepare('INSERT INTO usu  (usuario, contrasena, nombre, correo_e)
                                            VALUES (:user, :pass, :nom, :mail)');
        $rows = $stmt->execute(array('user'=>$user,
                                        ':pass'=>$pass,
                                        ':nom'=>$nombre,
                                        'mail'=>$correo));
        if($rows == 1){
            echo 'Inserción correcta';
        }
        */

        /*
        //Modificación de un registro
        $stmt = $con->prepare('UPDATE usu SET usuario=:user WHERE nombre=:nom');
        $rows = $stmt->execute(array(':user'=>$user,':nom'=>$nombre));

        if($rows > 0){
            echo 'Modificación correcta';
        }
        */

        //Borrado de un registro
        $stmt = $con->prepare('DELETE FROM usu WHERE usuario=:user');
        $rows = $stmt->execute(array(':user'=>$user));

        if($rows > 0){
            echo 'Borrado correcto';
        }


    }
    catch(PDOException $e){
        die('Error  conectando con la base de datos: ' . $e->getMessage());

    }

?>