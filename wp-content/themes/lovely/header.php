<?php 
$header_bg = get_field('header_background');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="site_header" style="background: url(<?php echo $header_bg['url'] ?>);">
    <div class="header_overlay"></div>
    <nav id="togle_menu" class="site-menu">
        <?php 
            wp_nav_menu( [ 
                'container_class' => 'menu-header',
                'theme_location'  => 'header'
            ] ); 
        ?>
    </nav>
    <div class='testimonials-block'>
        <div class="single-slide">

        </div>
    </div>
</header>