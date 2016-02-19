$(function(){

    /*----------------------
        Home / Hero Section
    ---------------------*/
    // Slide show
    var max = 4,
        num = 1,
        sliderShow = $('.slider-show');
    
    if (sliderShow.length > 0) {

        sliderShow.css({ 'background-image': 'url(img/hero/hero-img-' + num + '.jpg)' });
        num += 1;
        setInterval(function(){
            
            sliderShow
                .fadeOut(3000, function(){
                    if (num > max) num = 1;
                    $(this).css({
                        'background-image': 'url(img/hero/hero-img-' + num + '.jpg)'
                    });
                })
                .fadeIn(3000, function(){
                    num++;
                });
            
        }, 6000);

    }

    /*----------------------
        Gallery
    ---------------------*/
    var fbox = $(".fbox");

    if (fbox.length > 0) {
        
        fbox.fancybox({
            // beforeLoad: function() {},
            // beforeClose: function() {
            //     console.log("beforeClose");
            //     header.fadeIn("600");
            // },
            scrolling: "no",
            helpers: {
                overlay: {
                    css: {
                        "background" : "rgba(58, 42, 45, 0.8)"
                    }
                }
            }
        });   
    }

    /*----------------------
        Services
    ---------------------*/
    var servicesNavLists = $(".section-services-nav-lists");

    if (servicesNavLists.length > 0) {

        var pageTitleHeight = $(".page-title").height(),
            sevicesLists = $(".section-services-lists");

        $(window).scroll(function(event) {
            
            var topWindow = $(window).scrollTop(),
                sectionListsTop = sevicesLists.offset().top + pageTitleHeight - 80;

            if (topWindow >= sectionListsTop) {

                sevicesLists.addClass('push-5');
                servicesNavLists.addClass('section-services-nav-fixed');

            } else if (topWindow < sectionListsTop) {

                sevicesLists.removeClass('push-5');
                servicesNavLists.removeClass('section-services-nav-fixed');
            }

        });

        // Scrolling Event
        $(".section-services-link").click(function() {

            var serviceListId = $(this).attr('href'),
                top = $(serviceListId).offset().top;

            $("html,body").animate({
                scrollTop: top
            }, 1000);
        });

    }    

});