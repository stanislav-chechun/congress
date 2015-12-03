jQuery(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
        items: 6,
        loop: true,
        nav: true,
        autoplay: true,
        autoWidth: true,
        margin: 40,
        navText: [],
        autoplayHoverPause: true,
        responsive: {
            1100: {
                items: 5
            }
        },
        responsive:{
            980: {
                items: 4
            }
        },
        responsive:{
            768: {
                items: 2
            }
        },
        responsive:{
            320: {
                items: 1
            }
        }
    });
    $(".button a").toggle(function () {
        $(this).text('Close X');
        $(this).parent().parent().parent().find('.slide').slideDown("slow");
    }, function () {
        $(this).text('Rewiew');
        $(this).parent().parent().parent().find('.slide').slideUp("slow");
    });
    var time = $('.time').outerWidth();
    var button = $('.button').outerWidth();
    $('.slide .text p').css('padding-left', time).css('padding-right', button);
    $(window).resize(function () {
        var time = $('.time').outerWidth();
        var button = $('.button').outerWidth();
        $('.slide .text p').css('padding-left', time).css('padding-right', button);

    });
    $('#tabs-bottom').tab();
    $(".speaker img").click(function () {
       var id = $(this).parent().parent().attr('id');
       var res = '.'+id;
       $(res).fadeIn();
    });
        $(".close-popup").click(function () {
           $('.main-popup').fadeOut(); 
        });
});

