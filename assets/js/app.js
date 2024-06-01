$( document ).ready(function() {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
        $('#nav').addClass('scrolled')
        } else {
        $('#nav').removeClass('scrolled')
        }
    });

    $('.navbar-toggler').click(function(){
        ($(this).hasClass('open')) ? $(this).removeClass('open') : $(this).addClass('open')        
        // ($('.navbar-collapse').hasClass('show')) ? $('.navbar-collapse').removeClass('show') : $('.navbar-collapse').addClass('show')  
        $('.navbar-collapse').toggleClass('show')        
    })
        
});
//# sourceMappingURL=app.js.map
