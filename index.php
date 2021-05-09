<?php
$pagina = 'main';

if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}

include 'views/header.php';

switch ($pagina) {
    case 'main':
        include 'views/main.php';
        break;

    case 'sobre':
        include 'views/sobre.php';
        break;

    case 'fale_conosco':
        include 'views/fale_conosco.php';
        break;
    case 'registro':
        include 'views/registro.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
    
    default:
        include 'views/main.php';
        break;
}

include 'views/footer.php';
?>