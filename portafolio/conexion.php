

<?php 

    class conexion{ // Clase que se conecta a la base datos

        private $servidor= "localhost";
        private $usuario= "root";
        private $contrasenia="";
        private $conexion;

        public function __construct() // Inicializando la conexion, contructor que conecta a la BD
        {
            try{

                $this-> conexion = new PDO("mysql:host=$this->servidor; dbname=album", $this->usuario, $this->contrasenia);  // Creando instancia de PDO  de conexion
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                return "Falla de conexion" .$e;
            }
            
        }

        public function ejecutar($sql){  // Insertar/delete/Actualizar 

            $this -> conexion->exec($sql);
            return $this-> conexion->lastInsertId(); // Instruccion que regresa un Id 


        }

        public function consultar($sql){
            
            $sentencia = $this->conexion->prepare($sql); 
            $sentencia->execute();
            return $sentencia->fetchAll(); // FechAll me mostrara los datos

        }




    }


?>