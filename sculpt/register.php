<!--

Template name: Register page

-->
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

        <section class="introTextWrapper">
                <div class="wrapper">
                    
                    <div class="textWrapper">
                        <h1>Log in / Sign up</h1>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="mainContent">
                                    <?php echo do_shortcode('[theme-my-login]'); ?>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>
                        <?php endif; ?>                  
                    </div>
                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
    </body>
</html>
