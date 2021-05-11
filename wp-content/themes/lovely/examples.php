<?php
    /*
    * Template Name: Examples Page 
    */
    get_header();
    $header_bg = get_field('header_background');

?>

<section class="site_branding_block" style="background-image: url(<?php echo $header_bg['url'] ?>);" >
    <div class="logo_img_header_banner"> 
        <?php the_custom_logo(); ?>
    </div>
</section>


<section class="fullwidth_continer" >
    <div class="examples_row">

    </div>
</section>
<?php get_footer(); ?>