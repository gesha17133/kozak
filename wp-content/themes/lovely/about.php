<?php 
/*
* Template Name: Про нас
*/
get_header();

$header_bg = get_field('header_background');

?>

<section class="site_branding_block" style="background-image: url(<?php echo $header_bg['url'] ?>);" >
    <div class="logo_img_header_banner"> 
        <?php the_custom_logo(); ?>
    </div>
</section>
<section class="contact_data_section">
    <h3 class="about_title"><?php echo get_field( 'title_networks');  ?></h3>
    <div class="contact_data">
        
        <?php while( have_rows( 'social_networks' ) ) : the_row( ); ?>
            <div class="network_block">
                <p><a href="<?php the_sub_field('link') ?>"><?php the_sub_field( 'network' ); ?></a></p>
            </div>
        <?php endwhile; wp_reset_postdata()?>

    </div>
    <h3 class="about_title"><?php echo get_field('about_us_works_title') ?></h3>
    <div class="examples_work_contents">
        <?php  
            $args = array(
                'post_type'      => 'examples_works',
                'posts_per_page' => 5,
            );
            $query = new WP_Query( $args );
            while( $query->have_posts() ) : $query->the_post()
        ?>
        <div class="single_example">
            <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url( ) ?>" alt="">
            </a>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
    </div>

</section>
<div class="page_about_content">
    <h1 class="page_title_about"><?php the_title(); ?></h1>
    <div class="about_page_text">
        <?php the_content() ?>
    </div>
</div>

<?php 
get_footer();
?>