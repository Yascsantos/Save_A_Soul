$(document).ready(function(){

     var typed = new Typed(".typing", {
         strings:["Daiane", "Yasmin", "e", "Winicius"],
         typeSpeed:100,
         backSpeed:60,
         loop:true
     });
     var typed = new Typed(".typing-2", {
        strings:["2016"],
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
                items:3,
                nav:false
            }
        }
    });
});