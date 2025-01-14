<?php

session_start();
session_unset();
session_destroy();

echo "Sesion cerrada con exito";
echo "<script>
        setTimeout(function(){
            window.location.href='index.php'}, 2000);
        </script>";
?>