<?php include 'configaccount.php'; ?>
<!DOCTYPE html>
<html>
	<head>		
		<title>Blod Gamer Roleplay</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Servidor Roleplay en español para GTA San Andreas Multi Player">
		<meta name="keywords" content="gta, samp, roleplay, rp, español, sa-mp">
		<meta name="author" content="Nicolás Castillo">	

		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css"> #sombra { text-shadow: 0.1em 0.1em 0.2em black;}</style>         
	</head>
    <body style="padding-top: 10px; padding-bottom: 70px; background: #fff url(img/fondo.jpg) fixed;">
        <div class="container">
            <div id="SlidePrincipal" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#SlidePrincipal" data-slide-to="0" class="active"></li>
                    <!--<li data-target="#SlidePrincipal" data-slide-to="1"></li>-->
                </ol>
                <div class="carousel-inner" style="border-radius:5px;">
                    <div class="item active">
                        <img src="./img/BannerBLODGAMER.jpg" alt="Info Imagen">
                        <div class="carousel-caption">
                            <h1>Bienvenidos</h1>
                            <p id="sombra">Blod Gamer les da la bienvenida. Esperamos que disfruten de nuestro servidor.</p>
                        </div>
                    </div>
                    
                </div>
                <a class="left carousel-control" href="#SlidePrincipal" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#SlidePrincipal" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <?php include 'navegacion.php'; ?>
            <!--<nav class="navbar navbar-inverse"></nav>-->      
                
            <div class="alert alert-danger alert-dismissible" role="alert" id="AlertaSobreAlgo" style="display: none;">
                <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove"></span><span class="sr-only">Close</span></button>
                <span id="textoalerta"></span>
            </div>      
            <div class="container-fluid" style="color:white; background-color:rgba(0,0,0,0.8); border-radius:25px;">