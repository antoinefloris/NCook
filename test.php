<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cook</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="icon" type="image/png" href="../img/logo.png"/>
</head>
<body id="home">
<header>
    <div id="header">
        <div id="logo">
            <h1><a href="../View/index.php"><img id="logoimg" src="../img/logo.png"></a></h1>
            <a id="logo_nom" href="../View/index.php">N'Cook</a>
        </div>
        <div id="access">
            <div id="recherche">
                <input type="text" name="search" value="" placeholder="Recherchez">
            </div>
            <a class="nouvelle_recette_header" href=""><img id="smallplusrouge" src="../img/plusrouge.png">Nouvelle Recette</a>
            <ul class="compte"><li>
                    Portfolio
                    <ul>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Voir le profil</a></li>
                        <li><a href="../Model/logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="dropdown">
        <span><?php echo $userRow['user_name']; ?>&nbsp;</span>
        <div class="dropdown-content">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Voir le profil</a></li>
            <li><a href="../Model/logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Se déconnecter</a></li>
        </div>
    </div>
    
    <nav>
        <ul id="nav">
            <li><a href="#"><img src="../img/home.png" alt="homepage"></a></li>
            <li><a href="#">MENUS</a></li>
            <li><a href="#">RECETTES</a></li>
            <li><a href="#">NOUVEAUTÉS</a></li>
            <li><a href="#">RECETTES DE SAISONS</a></li>
            <li><a href="#">COMMUNAUTÉ</a></li>
            <li><a href="#">ASTUCES</a></li>
            <li><a href="#">RECETTES ALÉATOIRES</a></li>
        </ul>
    </nav>
</header>