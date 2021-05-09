<?php 
    $i = 0;

    $before_title = get_field( 'before_title' );
    $template_title  = get_field( 'template_title' );
    $after_title = get_field( 'after_title' );

    $args = array(
        'post_type'      => 'services',
        'posts_per_page' => 3,

    );

    $query = new WP_Query( $args );
    
    if( $query->have_posts() ):

 ?>
    <div class="title_section_services">
        <small> <?php echo $before_title; ?> </small>
        <h3><?php echo $template_title; ?></h3>
        <hr class="grd1">
        <p class="lead"><?php echo $after_title; ?></p>
    </div>
    <div class="wrapper-cards-services " >
        
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
        
        <?php 
            $i++;
            $value = $i % 2;
        ?>
        
        <div class="single-card">
            <a href="<?php the_permalink(); ?>"></a>
            <div class="service-widget-single <?php if( $value == 0 ){ echo "card-reversed"; } ?>"> 
                <div class="image-wrapp">
                    <a href="uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <div class="img-wrapper">
                    <div class="img-wrapper-overlay"></div>
                        <?php if( has_post_thumbnail( )  ) : the_post_thumbnail(); endif ; ?>
                    </div>
                </div>
                <div class="content-block-card">
                    <h3> <?php custom_excerpt( get_the_title( ), 40, $ellipsis = '...' )?> </h3>
                    <p> <?php custom_excerpt( get_the_excerpt( ), 300, $ellipsis = '...' ) ?> </p>
                </div>
            </div>
        </div>

    <?php endwhile;
    wp_reset_postdata();
    ?>

    </div>
    <div class="button_wrapper">
    <a href="#" class="button_services">Всі послуги</a>
    </div>

    <?php 
    endif;
?>