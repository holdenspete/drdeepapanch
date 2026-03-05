<section class="treatments related">
    <img class="leftImage" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">
    <div class="wrapper">
        <div class="text">
            <h2 class="bespokeTitle fadeInLeft onScreen">Related Treatments</h2>
        </div>
        <?php if( have_rows('related_treatments') ): ?>
            <div class="allTreatments">
                <?php while( have_rows('related_treatments') ): the_row(); ?>
                    <?php $post_object = get_sub_field('related_treatment'); ?>
                    <?php if( $post_object ): ?>
                        <?php // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <div class="treatment onScreen" style="background: url('<?php the_field('related_treatment_square_image'); ?>') no-repeat;">
                            <h3 class="fiftyFourTitle"><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" class="button">
                            <svg class="buttonBG" xmlns="http://www.w3.org/2000/svg" width="158.239" height="58.199" viewBox="0 0 158.239 58.199"><path d="M0,29.1a28.412,28.412,0,0,1,22.9-27.75c.373-.078,1.555-.267,1.871-.33l.378-.031c.425-.027,1.819-.139,2.277-.17C62.65-.193,97.906-.414,133.113,1l.379.031.375.066c.6.145,2.323.347,2.975.588l1.459.407c.242.071.488.127.725.212l.706.274,1.409.548a28.29,28.29,0,0,1,7.587,47.126,32.081,32.081,0,0,1-4.877,3.5c-.66.354-1.716.857-2.356,1.193-.639.263-1.831.7-2.466.96a32.293,32.293,0,0,1-3.665.945c-.373.078-1.555.266-1.871.33-2.13.212-4.93.282-7.093.321-33.491.932-67,1-100.485-.242l-.758-.057-.379-.031-.375-.065c-.6-.145-2.323-.347-2.975-.588A28.416,28.416,0,0,1,0,29.1m.5,0A26.662,26.662,0,0,0,25.3,55.615c1.918.1,4.621.012,6.572-.041q47.265-1.38,94.529-.01c2.065.062,4.847.135,6.931.031l.355-.045,1.424-.181C147.9,53.7,157.86,41.976,157.764,29.1c.051-13.509-10.6-25.345-24.079-26.457a12.874,12.874,0,0,0-1.432-.074c-1.614-.07-4.2.016-5.855.059Q77.657,4.075,28.916,2.566c-1.154-.065-2.471.013-3.618.03A26.656,26.656,0,0,0,.5,29.1" transform="translate(-0.001 0)" fill="#fff"/></svg>
                            <span>Read more</span>
                            </a>
                        </div>
                        
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>