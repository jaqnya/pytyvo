<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php
        if (!isset($title) || empty($title)) {
            $title = 'Sistema de Gesti&#243;n Pytyv&#245;';
        }

        echo "<title>$title</title>";
        ?>


        <link rel="icon" type="image/x-icon" href="<?php echo ROUTE_IMG ?>spirit-animal-logo.ico">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROUTE_CSS ?>bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROUTE_CSS ?>fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROUTE_CSS ?>icofont.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROUTE_CSS ?>styles.css">
    </head>
    <body>