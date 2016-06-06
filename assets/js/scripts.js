$('body').ready(function () {


    $(".modale").on("click", ".like i", function () {
        $(".like i").toggleClass("likeactive", 1000);
    });
    //favoris

    $(".modale").on("click", ".flaticon-star", function () {
        $(this).toggleClass("likeactive", 1000);
    });

    $(".modale").on("click", "#menu_preparation", function (event) {
        event.preventDefault();
        $("#menu_preparation").addClass("menu_active");
        $("#menu_ingredient").removeClass("menu_active");
        $('#les_ingredients').hide();
        $('#les_etapes').show();
    });

    $(".modale").on("click", "#menu_ingredient", function (event) {
        event.preventDefault();
        $("#menu_preparation").removeClass("menu_active");
        $("#menu_ingredient").addClass("menu_active");
        $('#les_etapes').hide();
        $('#les_ingredients').show();
    });

    $

    //plus
    var propo = true;
    $(".modale").on("click", "#plus", function (event) {
        if (propo == true) {
            event.preventDefault();
            $(".propositions").show();
            propo = false;
        }
        else {
            event.preventDefault();
            $(".propositions").hide();
            propo = true;
        }
    });




    // compte
    $("#menu_recette").click(function (event) {
        event.preventDefault();
        $("#menu_recette").addClass("menu_active");
        $("#menu_favoris").removeClass("menu_active");
        $("#menu_point").removeClass("menu_active");
        $('#profil_recette2').hide();
        $('#profil_recette3').hide();
        $('#profil_recette').show();
    });
    $("#menu_favoris").click(function (event) {
        event.preventDefault();
        $("#menu_favoris").addClass("menu_active");
        $("#menu_recette").removeClass("menu_active");
        $("#menu_point").removeClass("menu_active");
        $('#profil_recette').hide();
        $('#profil_recette3').hide();
        $('#profil_recette2').show();
    });
    $("#menu_point").click(function (event) {
        event.preventDefault();
        $("#menu_point").addClass("menu_active");
        $("#menu_recette").removeClass("menu_active");
        $("#menu_favoris").removeClass("menu_active");
        $('#profil_recette').hide();
        $('#profil_recette3').show();
        $('#profil_recette2').hide();
    });
    //MODALE

    //cacher la modale

    //charger et afficher modale si elle n'est pas déjà charger
    $(".entreeMarine").click(function (event) {
        event.preventDefault();
        $('#filtre_anim').show();
        $('body').css({
            'overflow':'hidden'
        });
        var element = $("#fiche_recette");
        if (element.length > 0) {
            $("#fiche_recette").show();
        } else {
            $.ajax({
                url: "includes/recette1.php"
            }).done(function (rep) {
                $(rep).appendTo(".modale");
            });
        }
        console.log(element.length);
    });

    $(".modale").on("click", ".cross", function (event) {
        event.preventDefault();
        $("#fiche_recette").hide();
        $('#filtre_anim').hide();
        $('body').css({
            'overflow':'scroll'
        });
    });

});

