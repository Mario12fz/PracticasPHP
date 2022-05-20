<!-- Consumir una API -->
<?php 

    $url= "https://api.dailymotion.com/videos?channel=sport&limit=10";

    $opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

    $respuesta=file_get_contents($url, false, stream_context_create($opciones)); // leer todo el contenido y convertirlo en string

    // stream_context_create sirve para desactivar la restripcion de la http y poder leer el contenido

    $objRespuesta= json_decode($respuesta);

   // print_r($objRespuesta);

    foreach($objRespuesta -> list as $video){

        //print_r($video->title);
        //print_r($video->channel);

    } // accediendo al dato


?>

<ul>
    <?php  foreach($objRespuesta -> list as $video){ ?>
        <li> <?php  echo ($video->title); ?> | <?php  echo ($video->channel); ?></li>
   

    

    <?php } ?>
  
  
</ul>