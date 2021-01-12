$(document).ready(function(){

    //top sale carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive:{
            0:{
                item: 1
            },
            600:{
                item: 3
            },
            800:{
                item: 5
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        // itemSelector: '.grid-item',
        // // layoutMode: 'fitRows'
    });
    //Filter function on buttons group
    $(".button-group").on("click","button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });
});