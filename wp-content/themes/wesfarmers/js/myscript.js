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
                width: 200,
                height: 150,
                method: 'resize',
                fitDirection: 'center center', 
                maxEnlargement: 1,
                nostyle: true
        });
    }
    
/*
    $('#footer-logo img').each(function(){
    	this.src = grayscale(this.src);
    });
*/
    
    
});


// Grayscale w canvas method
function grayscale(src){
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    var imgObj = new Image();
    imgObj.src = src;
    canvas.width = imgObj.width;
    canvas.height = imgObj.height; 
    ctx.drawImage(imgObj, 0, 0); 
    var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for(var y = 0; y < imgPixels.height; y++){
        for(var x = 0; x < imgPixels.width; x++){
            var i = (y * 4) * imgPixels.width + x * 4;
            var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
            imgPixels.data[i] = avg; 
            imgPixels.data[i + 1] = avg; 
            imgPixels.data[i + 2] = avg;
        }
    }
    ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
    return canvas.toDataURL();
}