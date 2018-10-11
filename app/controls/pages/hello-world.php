<?php
    use Oraculum\App;
use Oraculum\Register;

Register::set('titulo', 'Hello World');
    App::loadView()
        ->addTemplate('geral')
        ->loadPage('hello-world');
