$(function(){

    /*----------------------
        Hero Section
    ---------------------*/
    // Slider show
    var max = 4,
        num = 1,
        sliderShow = $('.slider-show');
    if (sliderShow.length > 0) {

        sliderShow.css({ 'background-image': 'url(img/hero/hero-img-' + num + '.jpg)' });
        num += 1;
        setInterval(function(){
            
            sliderShow
                .fadeOut(5000, function(){
                    if (num > max) num = 1;
                    $(this).css({
                        'background-image': 'url(img/hero/hero-img-' + num + '.jpg)'
                    });
                })
                .fadeIn(5000, function(){
                    num++;
                });
            
        }, 10000);

    }

});