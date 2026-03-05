<?php if( have_rows('details') ): ?>
    <section class="overview onScreen">
        <div class="wrapper">
            <div class="leftText" style="transform:translateY(50px);opacity:0;">
                <h4><span>Overview</span></h4>
            </div>
            <div class="rightText">
                <?php while( have_rows('details') ): the_row(); ?>
                    <div class="overviewItem" style="transform:translateX(-50px);opacity:0;">
                        <p><?php the_sub_field('detail_title'); ?></p>                                
                        <p><?php the_sub_field('detail_'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>                        
        </div>
    </div>
<?php endif; ?>