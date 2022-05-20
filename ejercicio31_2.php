<!-- Destruir variables de session -->
<?php 

    session_start();
    session_destroy(); // Eliminado la informacion


    echo "Se destruyo la sesion de usuario ";


?>