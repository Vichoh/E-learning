$(window).on("load", function() {
    $('.ceosim-img').fadeOut(1000);
    $('.loader').fadeOut(1000);
    $('.loading').animate({ height: 'toggle' }, 800);
    $('body').css("overflow", "");
    $( 'a.next' ).on( "click", function(event) {
        event.preventDefault();
        $('.ceosim-img').fadeIn(500);
        var urlSend = $(this).attr("href");
        $('.loader').fadeIn(500);
        $('.loading').animate({ height: 'toggle' }, 800,function() {
            window.location.href = urlSend;
        });
    });
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
});

