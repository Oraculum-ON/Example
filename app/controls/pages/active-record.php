<?php
    use Oraculum\App;
use Oraculum\Register;

Register::set('titulo', 'Active Record');
    App::loadView()
        ->addTemplate('geral')
        ->loadPage('active-record');
