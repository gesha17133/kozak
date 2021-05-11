<?php 
    $args = array(
        'post_type'      => 'replies',
        'posts_per_page' => 6,
    );

    $query = new WP_Query( $args );

?>
<div class="overlay_testimonials"></div>
<div id="testimonials" class="parallax section db parallax-off" >

    <div class="container-fluid">

        <div class="title_section_services colors_class">
            <div class="col-md-8 col-md-offset-2">
            <small>LET'S SEE OUR TESTIMONIALS</small>
            <h3>HAPPY TESTIMONIALS</h3>
            <hr class="grd1">
            <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
            </div>
        </div>
        
        <div class="row_for_slider">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
                <div class="slide_wrap">
                    <div class="testimonial clearfix">    
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> <?php custom_excerpt( get_the_title(), 70, $ellipsis = '...' ) ?> </h3>
                            <p class="lead"><?php custom_excerpt( get_the_content(), 200, $ellipsis = '...' )?></p>
                        </div>

                        <div class="testi-meta">
                            <img src="<?php the_post_thumbnail_url( ) ?>" alt="" class="img-responsive alignright" />
                            <h4><?php echo get_field( 'reply_author' )?><small><?php echo get_field('author_position') ?></small></h4>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</div>