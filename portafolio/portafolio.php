<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php 

    // Envio del formulario
    if($_POST){

        print_r($_POST);

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $fecha= new DateTime();

        $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];

        $imagen_temporal= $_FILES['archivo']['tmp_name'];

        move_uploaded_file($imagen_temporal, "imagenes/" .$imagen); // Envio de imagen move_uploaded_file significa mueve este archivo de imagen a imagenes


     $objConexion = new conexion();

     $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    
     $objConexion->ejecutar($sql);
     header("location:portafolio.php");
    }
    if($_GET){

        $id=$_GET['borrar'];
        $objConexion = new conexion();

        $imagen=  $objConexion->consultar ("SELECT imagen FROM `proyectos` WHERE id=" .$id);

        unlink("imagenes/" .$imagen[0]['imagen']); // unlink me es una funcion que me permite borrar la img   
        $sql= "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id; 
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");
    }
     

    $objConexion = new conexion();  // Instancia
    $proyectos = $objConexion->consultar ("SELECT * FROM `proyectos`");

   // print_r($resultado);

?>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
    <div class="card">
        <div class="card-header">
            Datos del proyecto
        </div>
        <div class="card-body">
           
    <form action="portafolio.php" method="post" enctype="multipart/form-data" >

        Nombre del proyecto: <input required class="form-control" classtype="text" name="nombre" id="">
        <br>
        Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
        <br>
        <div class="mb-3">
            Descripcion:
          <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar proyecto">

    </form>
        </div>
        
        </div>
            </div>
            <div class="col-md-6">
            <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $proyecto){ ?>
                <tr>
                    <td><?php echo $proyecto['id']; ?></td>
                    <td><?php echo $proyecto['nombre']; ?></td>
                    <td>

                        <img  width="100"  src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">
                       
                    
                    
                    </td>
                    <td><?php echo $proyecto['descripcion']; ?></td>
                    <!-- <td> <a name=""  class="btn btn-success" href="?actualizar=<?php echo $proyecto['id']; ?>">Actualizar</a></td> -->
                    <td> <a name=""  class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
            </div>
            
        </div>
    </div>



<?php include("pie.php"); ?>

<!-- bs5-card-head-foot es un contenedor -->
<!-- bs5-table-default genera tablas -->
<!-- bs5-grid-default genera una estructura col-md -->
<!-- bs5-button-a -->