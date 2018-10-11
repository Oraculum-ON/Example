<?php
    use Oraculum\App;
use Oraculum\Register;

Register::set('titulo', 'Primeiros Passos');
    App::loadView()
        ->addTemplate('geral')
        ->loadPage('primeiros-passos');
