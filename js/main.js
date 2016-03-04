$(function(){

    /*----------------------
        Home / Hero Section
    ---------------------*/
    // Slide show
    var sliderShow = $('.slider-show'),
        max = sliderShow.length,
        current = 0,
        prev;
    
    if (sliderShow.length > 0) {

        sliderShow.eq(current).css("opacity", 1);
        current += 1;
        setInterval(function(){

            if (current > max - 1) {
                current = 0;
                prev = max - 1;
                
            } else {
                prev = current - 1;
            }

            var self = sliderShow.eq(current);

            sliderShow.eq(prev)
                .animate({
                    opacity: 0.5
                }, 2000);

            sliderShow.eq(current)
                .animate({
                    opacity: 1
                }, 2000, function(){ 
                    
                    // sliderShow.not(self).css("opacity", 0);
                    sliderShow.eq(prev).animate({
                        opacity: 0
                    }, 1000);
                    sliderShow.not(self).css("opacity", 0);
                    current++;
                });
            
        }, 4000);

    }

    /*----------------------
        Gallery
    ---------------------*/

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
        $(".section-services-link").click(function(e) {
            e.preventDefault();
            var serviceListId = $(this).attr('href'),
                top = $(serviceListId).offset().top;

            $("html,body").animate({
                scrollTop: top
            }, 1000);
        });

    }    

    /*----------------------
        Trend Watch
    ---------------------*/

    // The Wookmark jQuery plugin is used to display trend watch lists
    // For more information check the website (http://www.wookmark.com/jquery-plugin)
    var trendWatchContainer = $(".section-trend-watch-container");
    if (trendWatchContainer.length > 0) {
        
        trendWatchContainer.wookmark({
            align: "center",
            // container: $("body"),
            // autoResize: true,
            itemWidth: "20%",
            // fillEmptySpace: true
            flexibleWidth: "25%",
            // offset: 5,
            // verticalOffset: 4
        });

    }

});