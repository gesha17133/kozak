
<?php
    /*
    * Template Name: Home
    */
    get_header();

    $quore_first = get_field('homepage-quote');

    $header_bg = get_field('header_background');
    $testimonials_bg = get_field('testimonials_bg');
?>

<section class="testimonials_section" style="background: url(<?php echo $header_bg['url'] ?>);" >

</section>
<section class="divider_section theme_section" >
    <div class='single-line'>
        <?php echo get_field('homepage-quote'); ?>
    </div>
</section>

<section class="services_section theme_section">
    <?php get_template_part( 'template_parts/services-loop' ); ?>
</section>

<section class="section-testimonials" style='background: url(<?php echo $testimonials_bg['url'] ?>);background-attachment: fixed; '>
    <?php get_template_part( 'template_parts/testimonials' ) ?>
</section>

<section class="section-tabs theme_section">
    <?php get_template_part( 'template_parts/sexy-tabs' ); ?>
</section>

<!--single card-->

<?php 
 get_footer();
?>