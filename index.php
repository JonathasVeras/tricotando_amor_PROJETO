<?php
$pagina = 'views/main';

if(isset($_GET['pagina']))
{
    $pagina = addslashes($_GET['pagina']);
}

include 'views/header.php';

switch ($pagina) {
    case 'sobre':
        include 'views/sobre.php';
        break;

    case 'fale_conosco':
        include 'views/fale_conosco.php';
    
    default:
        include 'views/main.php';
        break;
}

include 'views/footer.php';
?>