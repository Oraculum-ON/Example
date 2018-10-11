<?php
    use Oraculum\App;
	use Oraculum\Register;

	Register::set('titulo', 'Home');
    App::loadView('home', 'geral');
