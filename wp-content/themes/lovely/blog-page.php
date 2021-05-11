<?php
    /*
    * Template Name: Blog Page
    */
    get_header();
    $header_bg = get_field('header_background');
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10
    );

    $query = new WP_Query( $args );
?>

<section class="site_branding_block" style="background-image: url(<?php echo $header_bg['url'] ?>);" >
    <div class="logo_img_header_banner"> 
        <?php the_custom_logo(); ?>
    </div>
</section>


<section class="fullwidth_continer" >

    <div class="site-continer">
        <?php while( $query->have_posts() ) : $query->the_post() ?>
        <div class="card" style="background: url('<?php echo get_the_post_thumbnail_url( ); ?>') ">
            <div class="content">
                <h2 class="title"><?php custom_excerpt( get_the_title(), 50, $ellipsis = '...' ) ?></h2>
                <p class="copy"><?php custom_excerpt( get_the_excerpt(), 100, $ellipsis = '...' ) ?></p><button class="btn"><a class="cbt_link" href="<?php the_permalink()  ?>"> Більше </a>  </button>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

</section>

<?php get_footer(); ?>