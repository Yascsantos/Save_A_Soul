
$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });
   
     $('.scroll-up-btn').click(function(){
         $('html').animate({scrollTop: 0});
     });

    
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
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
const cartModal = document.getElementById('cart-modal');
const openCartButton = document.getElementById('open-cart');
const closeCartButton = document.getElementById('close-cart');

// Event listener to open the cart modal
openCartButton.addEventListener('click', () => {
    cartModal.style.display = 'block';
});

// Event listener to close the cart modal
closeCartButton.addEventListener('click', () => {
    cartModal.style.display = 'none';
});

