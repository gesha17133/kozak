<?php 

if( have_rows('tabs_block') ):
?>
    <div class="about-tab">
        
        <ul class="nav nav-tabs">
            
            <?php $i=0; ?>
            <?php while( have_rows( 'tabs_block') ) : the_row( )  ?>
                <?php $i++; ?>
                <li class="tab_button">
                    <a class="<?php if( $i == 1 ): echo 'active_tab'; endif; ?>" 
                    data-tab='<?php echo $i ?>' href="#tab_a" data-toggle="tab" aria-expanded="false">
                        <?php the_sub_field('button_tab_text') ; ?>
                    </a>
                </li>						
            
            <?php endwhile; ?>
        </ul>

        <?php $b = 0; ?>
        <div class="tab-content">
            <?php while( have_rows( 'tabs_block' ) ) : the_row( ); ?>
                <?php $b++; ?>
                <div data-block='<?php echo $b; ?>' 
                    class="tab-pane fade <?php if( $b == 1 ): echo 'active_tab_block'; endif; ?>" id="tab_a">

                    <p> <?php the_sub_field( 'tab_block_text' ); ?> </p>
                </div>
        
            <?php endwhile; ?>
        
        </div><!-- tab content -->
    </div>
<?php 
 endif;
?>