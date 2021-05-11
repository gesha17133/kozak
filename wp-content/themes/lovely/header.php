<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="site_header">
    <div class="header_overlay"></div>
    <div class="menu_active_overlay"></div>
    <nav id="togle_menu" class="site-menu">
        <div class='site-logo header_top'>
            <?php the_custom_logo( ); ?>
        </div>
        <div class="menu">
            <div> 
                <?php 
                    wp_nav_menu( [ 
                        'container_class' => 'header_menu_left',
                        'theme_location'  => 'header_menu_left'
                    ] ); 
                ?>
            </div>
            
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
            
            <div>
                <?php 
                    wp_nav_menu( [ 
                        'container_class' => 'header_menu_right',
                        'theme_location'  => 'header_menu_right'
                    ] );
                ?>
            </div>
        </div>        
        <div class="menu_toggle_button">
            <span class="first_block"></span>
            <span class="second_block"></span>
            <span class="third_block"></span>
        </div>
    </nav>
</header>