jQuery(document).ready(function($){
    let $tab = $('.tab_button a');

    $tab.on( 'click', function(event){
        
        let needed_tab = $(this).data('tab');

        event.preventDefault();
        
        $tab.removeClass('active_tab');
        
        $(this).addClass('active_tab');
        
        $('.tab-pane').removeClass('active_tab_block');

        $(".tab-content").find(`.tab-pane[data-block='${needed_tab}']`).addClass('active_tab_block'); 
    });
    
});