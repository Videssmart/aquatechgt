<?php
include 'global/config.php';
include 'global/conexion.php';
include 'funcion_carrito.php';
include "layouts/header.php";

$pagina = $_GET["seccion"] ?? "inicio";

$archivoPagina = "pages/$pagina.php";

if(file_exists($archivoPagina)){
    include $archivoPagina;
} else{
    echo "404 - Página no encontrada";
}


include "layouts/footer.php";

?>