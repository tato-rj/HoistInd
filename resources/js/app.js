require('./bootstrap');

var $topbar = $('#topbar');
var $menu = $('#menu');
var $menubtn = $('#menubtn');
var $logoblack = $('#logoblack');
var $logowhite = $('#logowhite');

$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();
    
    if (scrollTop > $topbar.outerHeight()) {
        $menu.addClass('menu-moved');
        $menu.removeClass('menu-parked');
        $menubtn.addClass('btn-outline-primary');
        $menubtn.removeClass('btn-white');
        $logoblack.show();
        $logowhite.hide();
    } else {
        $menu.addClass('menu-parked');
        $menu.removeClass('menu-moved');
        $menubtn.addClass('btn-white');
        $menubtn.removeClass('btn-outline-primary');
        $logoblack.hide();
        $logowhite.show();
    }
});

$('#menu-close, #menu-overlay').click(function() {
    $('#menu-mobile').addClass('menu-mobile-hidden');
    $('#menu-overlay').fadeOut('fast');
});

$('.navbar-toggler').click(function() {
    $('#menu-mobile').removeClass('menu-mobile-hidden');
    $('#menu-overlay').fadeIn('fast');
});

// SCROLL TO ELEMENT ON CLICK

$('[scrollto]').click(function() {

    var element = document.querySelector($(this).attr('scrollto'));

    // scroll to element
    element.scrollIntoView({behavior: 'smooth', top: '10000px'});
});