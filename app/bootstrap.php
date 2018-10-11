<?php
    use Oraculum\Alias;

	define('DS', DIRECTORY_SEPARATOR);
    define('PS', PATH_SEPARATOR);

    $path_composer = getcwd().DS.'..'.DS.'ON'.DS;
    $path_standalone = getcwd().DS.'..'.DS.'vendor'.DS;

    $path = get_include_path().PS.$path_composer.PS.$path_standalone;
    set_include_path($path);
    define('ON_DEBUG', FALSE);
    include 'autoload.php';

    Alias::loadAlias('Request');
