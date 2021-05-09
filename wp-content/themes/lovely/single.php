<?php 

get_header( );

global $post;
$a_id=$post->post_author;

?>

<div class="single_content_wrapper">
    <div class="single_post_headers">
        <div class="headers_overlay"></div>
        <div class="thumbnail_rapper">
            <?php if( has_post_thumbnail() ) : the_post_thumbnail( ); endif; ?>
        </div>
        <div class="title_block">
            <div class="post_credentials">
                <h3 class='the_single_title'><?php the_title(); ?></h3>
                <p> <?php echo the_author_meta( 'user_nicename', $a_id );?> </p>
                <p> <?php echo get_the_date() ?> </p>
            </div>
        </div>
    </div>
    <div class="avatar_author"><?php echo get_avatar( $a_id ) ?></div>
    <div class="post_content">
        <?php the_content(); ?>
    </div>
</div>
<?php 
get_footer();
?>