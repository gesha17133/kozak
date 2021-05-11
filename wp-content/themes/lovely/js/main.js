jQuery(document).ready(function($){
    let $menu = $('div.menu');
    let $menu_toggle_button = $('.menu_toggle_button');
    let $tab = $('.tab_button a');
    let $slider = $('.row_for_slider');

    $tab.on( 'click', function(event){
        
        let needed_tab = $(this).data('tab');

        event.preventDefault();
        
        $tab.removeClass('active_tab');
        
        $(this).addClass('active_tab');
        
        $('.tab-pane').removeClass('active_tab_block');

        $(".tab-content").find(`.tab-pane[data-block='${needed_tab}']`).addClass('active_tab_block'); 
    });

    $menu_toggle_button.on('click', function(){
        $('.menu_active_overlay').toggleClass('active');
        $(this).toggleClass('active_button');
        $menu.toggleClass('active_menu');
    });

    
    $slider.slick({
        dots: true,
        infinite: true,
        centerMode: true,
        prevArrow: null,
        nextArrow: null,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 2,
        slidesToScroll: 2,
        adaptiveHeight: true,
        responsive: [
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            }
        ],
    });


});