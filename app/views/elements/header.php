<?php $titulo = Oraculum\Register::get('titulo'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Oraculum::ON | <?php echo $titulo; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="<?php echo URL; ?>public/favicon.ico" type="image/x-icon" title="&Iacute;cone" />
        <link rel="icon" href="<?php echo URL; ?>public/favicon.gif" type="image/gif" />
        <link rel='stylesheet' media='screen' href='<?php echo URL; ?>public/css/geral.css' type='text/css' />
        <!--<link rel='stylesheet' media='screen' href='<?php echo URL; ?>public/css/bootstrap.css' type='text/css' />-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
		<div id="all">
<?php
    /*
        Carregando o Elemento Menu (/views/elements/menu.php)
                Um elemento pode ser chamado dentro de outro elemento
    */
    Oraculum\View::loadElement('menu');
