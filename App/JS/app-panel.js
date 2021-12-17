function menuMobile(){
    
    $('#arrow-account-info-deco').toggleClass('rotate-arrow-top');
    $("#blc-action-profil").toggleClass('visible-blc-action-profil');
}

$('#arrow-account-info-deco').click(menuMobile);
$('#arrow-account-info-deco-mobile').click(menuMobile);

if ($("#svg-elipse-menu") != null){
    $('#svg-elipse-menu').click(function e(){

        $('#blc-action-disc').toggleClass('open-blc-action-disc');
        console.log('pass');
    })
}
$('#menu-burger').click(function e(){

    $('#nav-mobile').toggleClass('nav-mobile');
    $('#menu-burger').toggleClass('menu-burger-mobile');
    if ($("#profil-settings") != null){
        $('#profil-settings').toggleClass('cache');
    }
    $('#hr-menu-burger-one').toggleClass('hr-menu-burger-mobile-one');
    $('#hr-menu-burger-two').toggleClass('hr-menu-burger-two');
    $('#hr-menu-burger-three').toggleClass('hr-menu-burger-mobile-three');

})
$('#chose-btn-select-color').click(function e(){
    $("#chose-color-df").css("display", "flex");
    $("#filtre-body").css("display", "block");
})
$("#filtre-body").click(function e(){
    $("#chose-color-df").css("display", "none");
    $("#filtre-body").css("display", "none");
})
$('.colors-fdr label').click(function (e){
    e.preventDefault() // demander au navigateur de ne rien faire
    let $a = $(this) // stock lien du click
    let $svg = $a.children()
    if($svg.hasClass('select-color')){
        return false
    }
    $svg.closest('label').siblings('label').find('.select-color').removeClass('select-color');
    $svg.addClass('select-color')

    $("#chose-color-df").css("display", "none");
    $("#filtre-body").css("display", "none");
    
    $('.icon-profil-modif')
    switch ($($a).attr("id")) {
        case "label-color-pink":
                $('.icon-profil-modif').css('background-color', '#fea2c7');
            break;
        case "label-color-blue":
            $('.icon-profil-modif').css('background-color', '#00a4d7');
            break;
        case "label-color-red":
                $('.icon-profil-modif').css('background-color', '#e94136');
            break;
        case "label-color-green":
                $('.icon-profil-modif').css('background-color', '#488865');
            break;
        case "label-color-yellow":
                $('.icon-profil-modif').css('background-color', '#fa9b4b');
            break;
    
        default:
            break;
    }
});
$("#svg-add-ticket").click(function(){
    $(".new-ticket").css('display', 'initial');
    $("#filtre-body-new").removeClass('dn');
})
$(".svg-exit-blc-contact-support").click(function(){
    $(".new-ticket").css('display', 'none');
    $("#filtre-body-new").addClass('dn');
})
$(window).ready(function (){
    if ($.trim($('.message-blc-ticket').html()) === ''){
        $('.message-blc-ticket').html('<p class="empty-message">-- Aucun ticket --</p>');
    }
    $('.message-blc-ticket').scrollTop(-$('.message-blc-ticket').height());
})
