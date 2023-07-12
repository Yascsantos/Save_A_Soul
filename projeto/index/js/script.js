$(document).ready(function(){
   

    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });

    var typed = new Typed(".typing", {
        strings:["Carinho"],
        typeSpeed:100,
        backSpeed:60,
        loop:true
    });

    $('.carousel').owlCarousel({
        margin:20,
        loop:true,
        autoplayTimeOut:2000,
        autoplayHoverPauser:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
        
            1000:{
                items:1,
                nav:false
            }
        }
    });
   
});
