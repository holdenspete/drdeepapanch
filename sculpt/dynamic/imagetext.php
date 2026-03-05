<section class="textImage">
    <img class="topRight" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">

    <?php if( get_sub_field('reverse') ) { ?>
        <div class="wrapper reverse">
    <?php } else { ?>
        <div class="wrapper">
    <?php } ?>
    <div class="textOne">
        <?php the_sub_field('text_side'); ?>
        <?php if( get_sub_field('optional_book_button') ) { ?>
            <a target="_blank" href="<?php the_sub_field('optional_book_button'); ?>" class="bookButton bgDarkRed">BOOK NOW</a>      
        <?php } else { ?>
        <?php } ?>


        </div>
        <div class="rightImage">
            <?php $halfImage=get_sub_field('image_side'); ?>
            <div class="imageWrapper onScreen">
                <img src="<?php echo $halfImage['sizes']['eightTen']; ?>" width="<?php echo $halfImage['sizes']['eightTen-width']; ?>" height="<?php echo $halfImage['sizes']['eightTen-height']; ?>" alt="<?php echo $halfImage['alt']; ?>" />
            </div>
        </div>
    </div>
</section>