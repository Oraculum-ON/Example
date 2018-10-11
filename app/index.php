<?php
    include './bootstrap.php'; // Carrega arquivo de inicializacao

    use Oraculum\On;

    $app = On::App();
    $app->frontController()
        ->setBaseUrl('/app/') // Define qual a URL base
        ->setDefaultPage('home') // Define qual a pagina padrao
        ->setErrorPage('404') // Define qual a pagina de erro
        ->start();
