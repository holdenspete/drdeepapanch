<?php get_header(); ?>

<div class="container indexContainer">
    <section class="topBlog blogsList">
        <div class="wrapper">
        <div class="blogsWrapper" style="opacity:0;transform:translateY(50px);">
                <?php 
                // The Query
                $next_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page'=>1,
                    'orderby'=>'ID',
                    'post__not_in' => array( $post->ID )
                    );
                $next_the_query = new WP_Query( $next_args );

                // The Loop
                if ( $next_the_query->have_posts() ) {
                while ( $next_the_query->have_posts() ) {
                $next_the_query->the_post(); ?>


                    <a href="<?php the_permalink(); ?>" class="oneBlog">
                        <div class="inner">
                            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <div class="imageWrapper" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                                <?php // the_post_thumbnail(); ?>
                            </div>
                            <div class="bottom">
                                <div class="inner" style="opacity:0;transform:translateX(50px);">
                                    <span class="featured">Featured blog</span>
                                    <div class="titleWrapper">
                                        <h3><?php the_title(); ?></h3>
                                        <span class="readtime"><?php the_field('read_time'); ?></span>
                                    </div>
                                    <div class="read">
                                        <span>Read now</span>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php }

                } else {
                // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();

                ?>
            </div>
        </div>
    </section>
    
    <section class="blogsList">
        <div class="wrapper">
              
        <div class="blogsWrapper secondList">
              <?php 
              // The Query
              $next_args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'offset'=>1,
                  'order'=>'DESC',
                  'orderby'=>'ID',
                  'post__not_in' => array( $post->ID )
                  );
              $next_the_query = new WP_Query( $next_args );

              // The Loop
              if ( $next_the_query->have_posts() ) {
              while ( $next_the_query->have_posts() ) {
              $next_the_query->the_post(); ?>

                  <a href="<?php the_permalink(); ?>" class="oneBlog onScreen fadeUp">
                      <div class="inner">
                          <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                          <div class="imageWrapper" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                              <?php // the_post_thumbnail(); ?>
                          </div>
                          <div class="bottom">
                              <div class="titleWrapper">
                                  <h3><?php the_title(); ?></h3>
                                  <span class="readtime"><?php the_field('read_time'); ?></span>
                              </div>
                              <div class="read">
                                <span>Read now</span>
                                <div class="dot"></div>
                              </div>
                          </div>
                      </div>
                  </a>

              <?php }

              } else {
              // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();

              ?>
                <?php the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Previous Page', 'textdomain' ),
                'next_text' => __( 'Next Page', 'textdomain' ),
                ) ); ?>
          </div>
        </div>
    </section>


</div>

    <script>

        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        // get different breakpoints based on datasets in body tag

        var body = document.querySelector('body');

        var mobileBP = body.dataset.breakpointMobile,
            largemobileBP = body.dataset.breakpointLargemobile,
            tabletBP = body.dataset.breakpointTablet,
            desktopBP = body.dataset.breakpointDesktop;
            largedesktopBP = body.dataset.breakpointLargedesktop;

        ScrollTrigger.matchMedia({
                
        // desktop
        [largedesktopBP]: function() {
           
                  
            var tlHome = gsap.timeline({ease: "power3"})

            let logo = document.querySelector('.logoWrapper');
            let loginLink = document.querySelector('.desktopLogin');
            let mainNav = document.querySelector('.mainNav')
            let innerIntro = document.querySelector('.topBlog .blogsWrapper');
            let text = document.querySelector('.topBlog .blogsWrapper .bottom .inner');
            let nav = document.querySelector('.bottomNav');

            tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
            tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
            tlHome.to(mainNav, {opacity:1, duration: .5})
            tlHome.to(innerIntro, {opacity:1, y:0, duration: .5})
            tlHome.to(text, {duration: 0.5, opacity:1, x:0})
            tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
            // tlHome.to(secondSection, {opacity:1, duration: .5})
        },

        // desktop
        [desktopBP]: function() {
        
            var tlHome = gsap.timeline({ease: "power3"})

            let logo = document.querySelector('.logoWrapper');
            let loginLink = document.querySelector('.desktopLogin');
            let mainNav = document.querySelector('.mainNav')
            let innerIntro = document.querySelector('.topBlog .blogsWrapper');
            let text = document.querySelector('.topBlog .blogsWrapper .bottom .inner');
            let nav = document.querySelector('.bottomNav');

            tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
            tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
            tlHome.to(mainNav, {opacity:1, duration: .5})
            tlHome.to(innerIntro, {opacity:1, y:0, duration: .5})
            tlHome.to(text, {duration: 0.5, opacity:1, x:0})
            tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
            // tlHome.to(secondSection, {opacity:1, duration: .5})

        },

        // tablet
        [tabletBP]: function() {

            var tlHome = gsap.timeline({ease: "power3"})

            let innerIntro = document.querySelector('.topBlog .blogsWrapper');
            let text = document.querySelector('.topBlog .blogsWrapper .bottom .inner');
            let nav = document.querySelector('.bottomNav');
            // let secondSection = document.querySelector('.formSection .wrapper');

            tlHome.to(innerIntro, {opacity:1, y:0, duration: .5})
            tlHome.to(text, {duration: 0.5, opacity:1, x:0})
            tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
            // tlHome.to(secondSection, {opacity:1, duration: .5})


        },
    
        // above mobile
        [largemobileBP]: function() {
          
            var tlHome = gsap.timeline({ease: "power3"})

            let innerIntro = document.querySelector('.topBlog .blogsWrapper');
            let text = document.querySelector('.topBlog .blogsWrapper .bottom .inner');
            let nav = document.querySelector('.bottomNav');
            // let secondSection = document.querySelector('.formSection .wrapper');

            tlHome.to(innerIntro, {opacity:1, y:0, duration: .5})
            tlHome.to(text, {duration: 0.5, opacity:1, x:0})
            tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
            // tlHome.to(secondSection, {opacity:1, duration: .5})

        },
        // mobile
        [mobileBP]: function() {
         
            var tlHome = gsap.timeline({ease: "power3"})

            let innerIntro = document.querySelector('.topBlog .blogsWrapper');
            let text = document.querySelector('.topBlog .blogsWrapper .bottom .inner');
            let nav = document.querySelector('.bottomNav');
            // let secondSection = document.querySelector('.formSection .wrapper');

            tlHome.to(innerIntro, {opacity:1, y:0, duration: .5})
            tlHome.to(text, {duration: 0.5, opacity:1, x:0})
            tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
            // tlHome.to(secondSection, {opacity:1, duration: .5})


        },
        
        // all 
        "all": function() {
            

            // image subtle halfspeed
            let imageHalfSpeed = document.querySelectorAll(".imageHalfSpeed")
                
            imageHalfSpeed.forEach( (element) => {
                
                let tlpara = gsap.timeline()
                .to(element, { y:100, stagger: 0.1})
                
                ScrollTrigger.create({
                trigger:element,
                start:"top 99%",
                end: "bottom top",
                invalidateOnRefresh: true,
                scrub:1,
                toggleActions:"play none none reverse",
                animation:tlpara
                })
                
            })
            // image subtle double speed
            let imageDoubleSpeed = document.querySelectorAll(".imageDoubleSpeed")
                
            imageDoubleSpeed.forEach( (element) => {
                
                let tlpara = gsap.timeline()
                .to(element, { y:-100, stagger: 0.1})
                
                ScrollTrigger.create({
                trigger:element,
                start:"top 99%",
                end: "bottom top",
                invalidateOnRefresh: true,
                scrub:1,
                toggleActions:"play none none reverse",
                animation:tlpara
                })
                
            })




            // parallax halfspeed
            let halfPara = document.querySelectorAll(".parallaxHalf")
                
            halfPara.forEach( (element) => {
                
                let tlpara = gsap.timeline()
                .to(element, { y:150, stagger: 0.1})
                
                ScrollTrigger.create({
                trigger:element,
                start:"top 99%",
                end: "top 1%",
                invalidateOnRefresh: true,
                scrub:1,
                toggleActions:"play none none reverse",
                animation:tlpara
                })
                
            })

            // parallax 2 x speed
            let oneHalfPara = document.querySelectorAll(".parallaxDouble")

            oneHalfPara.forEach( (element) => {
                
                let tloneHalfPara = gsap.timeline()
                .to(element, { y:-150, stagger: 0.1})
                
                ScrollTrigger.create({
                trigger:element,
                start:"top 99%",
                end: "top 5%",
                // markers:true,
                invalidateOnRefresh: true,
                scrub:1,
                toggleActions:"play none none reverse",
                animation:tloneHalfPara
                })
                
            })


            // add class to each item - repeats on scroll back
                                                                
            const revealText = gsap.utils.toArray('.onScreen');
            revealText.forEach((sec, i) => {
                ScrollTrigger.create({
                trigger: sec,
                toggleClass: 'active',
                invalidateOnRefresh: true,
                start: 'top 99%',
                scrub:1,
                toggleActions:"start none none none",
                once: true,
                // endTrigger and end set to stop it removing the class once you go past the elements. 
                //In other words, it doesn't reverse the transitions on the way back up.
                endTrigger: 'html',
                end: 'bottom top'
                })
            })

            // move background items from left to right more - Like the Footer background
            let sectionBG = document.querySelectorAll(".leftToRight")
            
            sectionBG.forEach( (element) => {
                
                let tl = gsap.timeline()
                .to(element, { x:"-40%", stagger: 0.1})
                
                ScrollTrigger.create({
                trigger:element,
                start:"top 100%",
                endTrigger: 'html',
                end: 'bottom top',
                // markers: true,
                invalidateOnRefresh: true,
                scrub:1,
                toggleActions:"play none none reverse",
                animation:tl
                })
                
            })
        

        }


    });

    </script>

<?php get_footer(); ?>