var mainHeaderObj   = null;

$(function() {
    //Hide body for a sec to give it time to load images
    $('body').css({opacity:0});

    //If the window.Bind Load doesn't run fast enough Show the body anyway.
    setTimeout(function(){
        $('body').animate({
            opacity: 1
        }, 600, function() {
            // Animation complete.
        });
    },800);

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
    var mainNavigation  = '.stayTrue-navigation',
        mainHeader      = '.stayTrue-header';

    $( document ).scroll(function() {

        //Poll Object During scroll.
        mainHeaderObj   = $(mainHeader)[0].getBoundingClientRect();
        //If bottom of header passes frame
        if( mainHeaderObj.bottom <= 0){
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

