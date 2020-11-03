<?php
    class Registro {
        var $conn;

        function conectar(){
            $conn = null;

            try{
                $conn = new PDO('mysql:host=localhost;dbname=tiendaut',
                                'root',
                                '');
        
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                //echo 'Conectado a la base de datos <br><br>';
            }
            catch(PDOException $e){
                die (print_r('Error  conectando con la base de datos: '
                         . $e->getMessage()));
        
            }
            return $conn;
        }

        function registrarUsuario($user, $pass, $nom, $email){
            $con = $this->conectar();

            $consulta = 'INSERT INTO usu (usuario, contrasena, nombre, correo_e)
                        VALUES (:usuario, :pass, :nom, :email)';
        
        $stmt = $con->prepare($consulta);
    
        $stmt->execute(array(':usuario' => $user, ':pass' => $pass, ':nom' => $nom, ':email' => $email));

        $registro  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numRegistros = count($registro);

        return $numRegistros;
        }
    }


    

?>