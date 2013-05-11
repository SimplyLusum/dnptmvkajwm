$(function(){

    if($('#slider').length){
        $('#slider').cycle({
            prev: "#prev",
            next: "#next"
        });
    }
    $('nav > a:first').addClass("first");
    $("#footer-nav").append('<li class="stretch"></li>');
        
    if($('#contact-list').length){
        $('#contact-list > li > .left').nailthumb({
                width: 200,
                height: 150,
                method: 'resize',
                fitDirection: 'center center', 
                maxEnlargement: 1
        });
    }
    if($('#brand-list').length){
        $('#brand-list > li > .img').nailthumb({
                width: 290,
                height: 150,
                method: 'resize',
                fitDirection: 'center center', 
                maxEnlargement: 1
        });
    }
});