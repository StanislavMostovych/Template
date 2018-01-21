<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <!--
     <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='<?php bloginfo('stylesheet_url');?>http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700,800,900' rel='stylesheet' type='text/css'>
    <link href='<?php bloginfo('stylesheet_url');?>http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>path/to/font-awesome/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url');?>https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>css/main.css" rel="stylesheet"> 
    -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <li> <a class="navbar-brand" href="#">lorem lorem lorem</a></li>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#history">About</a></li>
                    <li><a href="#portfolio">Ather</a></li>
                    <li><a href="galery.html"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>GALERIA</a></li>
                    <li><a href="news.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>NEWS</a></li>
                    <li><a href="contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>CONTACT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse glyphicon glyphicon-picture -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div id="carousel-example-generic" class="carousel  carousel-fade" data-ride="carousel">
