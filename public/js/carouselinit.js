$(document).ready(function(){
    $('.product-carousel').owlCarousel({
        loop:true,
        margin:100,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            992: {
              items:2
            },
            1280:{
                items:3
            },
        }
    })
});
