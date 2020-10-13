<?php

include_once "paginas/includes/header.php"; 
$paginas =isset ($_GET['pg']);


if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
        
        default:
           
            break;
    }
}

include_once "paginas/curriculo.php";
     
  include_once "paginas/includes/footer.php";

