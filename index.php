<?php require_once 'includes/header.php' ?>
<div id="carousel">
    <ul>
        <li>
            <img src="img/slide.png">
            <h2>Recettes aux framboises</h2>
            <h3>Un amour de framboise</h3>
        </li>
    </ul>
</div>
<section id="choix">
    <div id="gris">
        <div class='contenu'>
            <ul>
                <li class="carre">
                    <div class="textcarre"><a href="#">APÉRITIFS</a></div>
                </li>
                <li>
                    <a href=""><img src="img/entrée.png" alt="" class="entreeMarine"></a></li>
                <li class="carre">
                    <div class="textcarre"><a href="#">PLATS</a></div>
                </li>
                <li>
                    <a href=""><img src="img/desserts.png" alt=""></a></li>
            </ul>
            <ul>
                <li><a href=""><img src="img/aperitif.png" alt=""></a></li>
                <li class="carre">
                    <div class="textcarre"><a href="#">ENTRÉES</a></div>
                </li>
                <li>
                    <a href=""><img src="img/plats.png" alt=""></a></li>
                <li class="carre">
                    <div class="textcarre"><a href="#">DESSERTS</a></div>
                </li>
            </ul>
        </div>

    </div>
</section>

<section id="recette">
    <div id="depot">
        <ul>
            <li class="rectanglevertdepot">
                <div class="textdepot">DÉPOSER UNE RECETTE</div>
            </li>
            <li><img src="img/trianglevert.png" alt=""></li>
            <li><p>Devenez membre de la communauté N’Cook en ajoutant votre propre recette !</p></li>
            <li><a class="home_new_recette" href="#">Nouvelle Recette</a></li>

        </ul>
    </div>
    <div id="affichage">
        <div class="contenuaffichage">
            <div class="affichagerecette">
                <ul>
                    <li><img src="img/recettepimenté.png" alt=""></li>
                    <li><h3>Recette pimentée</h3></li>
                    <li><p>Faites entrer le soleil</p></li>
                    <li class="rectanglerouge">
                        <div class="textrecette"><a href="#">RECETTES</a></div>
                    </li>
                </ul>
            </div>
            <div class="affichagerecette2">
                <ul>
                    <li><img src="img/recetteallege.png" alt=""></li>
                    <li><h3>Recette allégée</h3></li>
                    <li><p>Nos recettes pour maigrir</p></li>
                    <li class="rectanglerouge">
                        <div class="textrecette"><a href="#">RECETTES</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="recette2">
    <div id="affichage2">
        <div class="contenuaffichage">
            <div class="affichagerecette">
                <ul>
                    <li><img src="img/recetteallegee2.png" alt=""></li>
                    <li><h3>Recette allégée</h3></li>
                    <li><p>Nos recettes pour maigrir</p></li>
                    <li class="rectanglerouge">
                        <div class="textrecette"><a href="#">RECETTES</a></div>
                    </li>
                </ul>
            </div>
            <div class="affichagerecette2">
                <ul>
                    <li><img src="img/preparezlapero.png" alt=""></li>
                    <li><h3>Préparez l’apéro !</h3></li>
                    <li><p>Notre séléction de mignardises</p></li>
                    <li class="rectanglerouge">
                        <div class="textrecette"><a href="#">RECETTES</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="depot2">
        <ul>
            <li class="rectanglevertdepot">
                <div class="textdepot">NEWSLETTER</div>
            </li>
            <li><img src="img/trianglevert.png" alt=""></li>
            <li><p>Abonnez-vous à notre newsletter et recevez toute notre actualité</p></li>
            <li><input class="mail" type="text" name="search" value="" placeholder="Votre adresse mail"></li>
        </ul>
    </div>
</section>

<section id="membres">
    <div id="contenumembre">
        <h2>DEVENEZ MEMBRE DE LA COMMUNAUTÉ</h2>
        <div class="imagesmembres">
            <ul>
                <li><a href=""><img src="img/member.png" alt=""></a></li>
                <li><a href=""><img src="img/member2.png" alt=""></a></li>
                <li><a href=""><img src="img/member3.png" alt=""></a></li>
            </ul>
            <ul>
                <li><a href=""><img src="img/member4.png" alt=""></a></li>
                <li><a href=""><img src="img/member5.png" alt=""></a></li>
                <li><a href=""><img src="img/member6.png" alt=""></a></li>
            </ul>
            <ul>
                <li><a href=""><img src="img/member7.png" alt=""></a></li>
                <li><a href=""><img src="img/member8.png" alt=""></a></li>
                <li><a href=""><img src="img/member9.png" alt=""></a></li>
            </ul>
        </div>
        <div class="informationmembre">
            <ul>
                <li><p><img src="img/plusrouge.png" alt=""/> Déposez vos recettes</p></li>
                <li><p><img src="img/like.png" alt=""/> Notez les propositions d’ingrédients</p></li>
                <li><p><img src="img/share-arrow.png" alt=""/> Partagez à vos proches</p></li>
            </ul>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php' ?>
<div class="modale"></div>
<script src="assets/js/jquery-1.11.3-jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>