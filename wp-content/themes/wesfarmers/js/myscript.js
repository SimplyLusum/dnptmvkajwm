$(function(){

    $('#slider').cycle({
        prev: "#prev",
        next: "#next"
    });
    
    $('.menu-main-container > li > a:first').addClass("first");
    $('.menu-footer-container > li:last').after('<li class="stretch"></li>');

});
