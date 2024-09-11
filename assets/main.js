jQuery(document).ready(function($) {
    $('.concordtest-main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.concordtest-nav-slider',
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" /></svg></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg></button>'
    });

    $('.concordtest-nav-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: '.concordtest-main-slider',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        vertical: true,
        draggable: false,
        infinite: false

    });
});

jQuery(document).ready(function($) {
    $('.related-products-slider').slick({
        slidesToShow: 4,  
        slidesToScroll: 1, 
        infinite: true,  
        dots: false,     
        arrows: true,
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg></button>'    
        
    });
});
