

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    items:1,
    nav:true,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],
    dots:true,
    autoplay: true,
    autoplayHoverPause: false,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:1,
            
        },
        1000:{
            items:1,
            
            
        }
    }
})