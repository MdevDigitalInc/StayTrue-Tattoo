var mainHeaderObj   = null;

$(function() {
    //Smooth Scroll ---------------------------------
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });//[ SMOOTH SCROLL ] ---------------------------

    // Navigation Scroll & Window Resize -------------

    // Variables and Objects for Nav
    var mainNavigation  = '.stayTrue-navigation';

    $( document ).scroll(function() {
        var top = $(window).scrollTop();
        //Poll Object During scroll.
        //If bottom of header passes frame
        if( top > 0){
            $(mainNavigation).css({
                position    : 'fixed',
                top         : '0'
            });
            $(mainNavigation).addClass( "transparency" );
            scrollFlag = true;
        }
        //Return
        else{
            $(mainNavigation).css({
                position    : 'relative',
                top         : '0'
            });
            $(mainNavigation).removeClass( "transparency" );
            scrollFlag = false;
        }
    });//[ SCROLL FUNCTION ] -----------------------

});

