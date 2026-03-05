
<section class="imageWithTitleOverlay">
    <img class="leftImage" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">
    <div class="wrapper">
        <div class="imageText">
            <div class="imageWrapper onScreen">
                <?php $firstImage=get_sub_field('image_flowing'); ?>
                <img src="<?php echo $firstImage['sizes']['textOverlay']; ?>" width="<?php echo $firstImage['sizes']['textOverlay-width']; ?>" height="<?php echo $firstImage['sizes']['textOverlay-height']; ?>" alt="<?php echo $firstImage['alt']; ?>" />
            </div>
            <div class="textWrapper onScreen">
                <h2 class="bespokeTitle"><?php the_sub_field('flowing_text'); ?></h2>
            </div>
        </div>
    </div>
</section>