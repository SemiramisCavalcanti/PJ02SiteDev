<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'FenixEcho':
            include_once 'paginas/include/header.php';
            include_once 'paginas/include/botoes-laterais.php';
            include_once 'paginas/fenixEcho.php';
            include_once 'paginas/formulario_php.php';
            include_once 'paginas/topicos/servicos.php';
            include_once 'paginas/topicos/portifolio.php';
            include_once 'paginas/topicos/sobre.php';
            include_once 'paginas/topicos/contato-localizacao.php';
            include_once 'paginas/include/footer.php';
            break;

            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
            include_once 'paginas/include/header.php';
            include_once 'paginas/include/botoes-laterais.php';
            include_once 'paginas/fenixEcho.php';
            include_once 'paginas/topicos/servicos.php';
            include_once 'paginas/topicos/portifolio.php';
            include_once 'paginas/topicos/sobre.php';
            include_once 'paginas/topicos/contato-localizacao.php';
            include_once 'paginas/include/footer.php';
            break;
    }
} else {
    //não existe   
    include_once 'paginas/include/header.php';
    include_once 'paginas/include/botoes-laterais.php';
    include_once 'paginas/fenixEcho.php';
    include_once 'paginas/topicos/servicos.php';
    include_once 'paginas/topicos/portifolio.php';
    include_once 'paginas/topicos/sobre.php';
    include_once 'paginas/topicos/contato-localizacao.php';
    include_once 'paginas/include/footer.php';
}
