<?php if( have_rows('logos') ): ?>
  <section class="featured aboutFeatured">
    <img class="leftBG" src="<?php echo get_template_directory_uri(); ?>/images/featuredLeftBG.png" alt="Dr Deepa Panch">
    <div class="wrapper">
        <!-- <h3 class="inTouchTitle">Featured in</h3> -->
        <div class="images onScreen">
          <?php while( have_rows('logos') ): the_row(); ?>
            <div class="imageWrapper">
              <?php $logo=get_sub_field('image'); ?>
              <img style="max-height:<?php the_sub_field('max_height'); ?>;filter:opacity(<?php the_sub_field('optional_greyscale_amount'); ?>);" src="<?php echo $logo['sizes']['large']; ?>" width="<?php echo $logo['sizes']['large-width']; ?>" height="<?php echo $logo['sizes']['large-height']; ?>" alt="<?php echo $logo['alt']; ?>" />
            </div>   
          <?php endwhile; ?>
        </div>
    </div>
    <img class="rightBG" src="<?php echo get_template_directory_uri(); ?>/images/featuredRightBG.png" alt="Dr Deepa Panch">
  </section>
<?php endif; ?>