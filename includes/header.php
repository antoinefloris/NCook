<?php ini_set('display_errors','off');?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cook</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
</head>
<body id="home">
<div id="filtre_anim"></div>
<header>
    <div id="header">
        <div id="logo">
            <h1><a href="index.php"><img id="logoimg" src="assets/img/logo.png"></a></h1>
            <a id="logo_nom" href="index.php">N'Cook</a>
        </div>
        <div id="access">
            <div id="recherche">
                <input type="text" name="search" value="" placeholder="Recherchez">
            </div>
            <a class="nouvelle_recette_header" href=""><img id="smallplusrouge" src="assets/img/plusrouge.png">Nouvelle Recette</a>
            <a href="login.php"><img id="user" src="assets/img/user.png"></a>
        </div>
    </div>
    <nav>
        <ul id="nav">
            <li><a href="index.php"><img src="assets/img/home.png" alt="homepage"></a></li>
            <li><a href="#">MENUS</a></li>
            <li><a href="recherche.php">RECETTES</a></li>
            <li><a href="#">NOUVEAUTÉS</a></li>
            <li><a href="#">RECETTES DE SAISONS</a></li>
            <li><a href="votes.php">COMMUNAUTÉ</a></li>
            <li><a href="#">ASTUCES</a></li>
            <li><a href="#">RECETTES ALÉATOIRES</a></li>
        </ul>
    </nav>
</header>