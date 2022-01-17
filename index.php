<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'FenixEcho':
            include_once 'paginas/header.php';
            include_once 'paginas/fenixEcho.php';
            include_once 'paginas/footer.php';
            break;


            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
            include_once 'paginas/header.php';
            include_once 'paginas/fenixEcho.php';
            include_once 'paginas/footer.php';
            break;
    }
} else {
    //não existe   
    include_once 'paginas/header.php';
    include_once 'paginas/fenixEcho.php';
    include_once 'paginas/footer.php';
}
