// Toggle sur la boite modal
// Ouvre la boite
$('.recette').click(function () {
    $('#fiche_recette').show();
    $('body').css({
        'overflow' : 'hidden'
    });
    $('#filtre_anim').show().css({
        backgroundColor : '#000000'
    });

});

// Ferme la boite
$('.cross').click(function (e) {
    e.preventDefault();
    $('body').css({
        'overflow' : 'scroll'
    });
    $('#fiche_recette').hide();
    $('#filtre_anim').hide();
});

// Fonction qui permet de style de l'élément
function getStyleCSS(elem, style){
    var element = document.querySelector(elem);
    return getComputedStyle(element,null).getPropertyValue(style);
}

// Toggle sur recettes et favoris après avoir ouvert la boite modal
$('#menu_recette').click(function (e) {
    e.preventDefault();
    var styleElement = getStyleCSS('#les_ingredients', 'display');
    if(styleElement == 'none'){
        $('.menu_active').removeClass('menu_active');
        $('#les_etapes').hide();
        $('#les_ingredients').show();
    }
    $(this).addClass('menu_active');
});

// Toggle sur recettes et favoris après avoir ouvert la boite modal
$('#menu_favoris').click(function (e) {
    e.preventDefault();
    $('.menu_active').removeClass('menu_active');
    $('#les_ingredients').hide();
    $('#les_etapes').show();
    $(this).addClass('menu_active');
});

