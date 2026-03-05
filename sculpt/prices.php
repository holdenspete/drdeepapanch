<!--

Template name: Prices page

-->
  
<?php get_header(); ?>

    <div class="container" style="background-color: #FCF6EF;">
        <section class="introBanner gradientBG">
            <img class="topLeftAbout" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">
            <img class="topRight moveRight" src="<?php echo get_template_directory_uri(); ?>/images/pricesTopRight.png" alt="Dr Deepa Panch">
            
            <div class="wrapper">
                <div class="mainTitleWrapper" style="transform:translateY(-50px);opacity:0;">
                    <h1 class="largeh1">Prices</h1>
                </div>
                <div class="introText" style="transform:translateX(50px);opacity:0;">
                    <div class="secondTitle">
                        <h2 class="bespokeTitle"><?php the_field('intro_title'); ?></h2>
                        <?php the_field('intro'); ?>
                    </div>
                    <div class="bottomText">
                        <?php the_field('consultation'); ?>
                    </div>
                    <div class="contactButton">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">
                            <svg class="bg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 229.2 125" style="enable-background:new 0 0 229.2 125" xml:space="preserve"><path d="M118.4 122.7s-51 0-65.4-1.8S-.6 104.7 1.2 61.6 37.6 4.4 58.8 3.1s107.8-.8 117.2.3c9.4 1 51.1 11.4 52.1 57.8.9 45.9-43.2 62.6-48.7 59.9-2.6-1.3-61 1.6-61 1.6z" /><path d="M228.7 62.7c.3 25.2-16.4 49.1-40.3 57.6-11.8 4.5-24.7 3.6-37.1 4-12.3.2-24.6.4-36.8.3-10.7.1-26-.3-36.8-.4-12.4-.4-25.3.5-37.1-4C16.8 111.9.1 87.9.4 62.7-.1 30.5 26.9 2.2 59.2 1.6 83.8.9 108.3.7 132.9.9c10.8.3 26.2.3 36.9.7 6.4.2 12.6 1.4 18.6 3.6 23.9 8.4 40.5 32.4 40.3 57.5m-.9 0c.1-31.7-26.4-57.5-58-56.8-36.6 1-74 1-110.5 0C27.9 5.4 2 30.3 1.4 61.6s24.3 57.3 55.6 57.9h2.2l18.4-.4c10.9-.3 26.1-.3 36.8-.4 12.3 0 24.6.1 36.8.3 12 0 24.3 1.7 36-2 24.1-7.2 40.5-29.2 40.6-54.3" style="fill:#af493d"/></svg>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pricesIntro">
            <div class="wrapper">
                <img class="leftImage" src="<?php echo get_template_directory_uri(); ?>/images/smallLeftPrice.png" alt="Dr Deepa Panch">

                <?php if( have_rows('treatments') ): ?>
                    <div class="pricelist onScreen">
                        <img class="bottomLeft" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">

                        <?php while( have_rows('treatments') ): the_row(); ?>
                            <div class="treatmentWrap">
                                <h2 class="ital"><span><?php the_sub_field('treatment_type'); ?></span><?php if( get_sub_field('optional_type_explaination') ): ?> <span><?php the_sub_field('optional_type_explaination'); ?></span><?php endif; ?></h2>
                                <?php if( have_rows('treatment') ): ?>
                                    <div class="bottomPriceList">
                                        <?php while( have_rows('treatment') ): the_row(); ?>
                                        <div class="treatmentWrapper">
                                            <p><?php the_sub_field('treatment_name'); ?></p>                                
                                            <p><?php the_sub_field('treatment_price'); ?></p>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>                        
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?> 

                <?php if( have_rows('treatments_right') ): ?>
                    <div class="pricelist onScreen">
                        <img class="rightCloud" src="<?php echo get_template_directory_uri(); ?>/images/aboutTopLeft.png" alt="Dr Deepa Panch">

                        <?php while( have_rows('treatments_right') ): the_row(); ?>
                            <div class="treatmentWrap">
                                <h2 class="ital"><span><?php the_sub_field('treatment_type_right'); ?></span><?php if( get_sub_field('optional_type_explaination_right') ): ?> <span><?php the_sub_field('optional_type_explaination_right'); ?></span><?php endif; ?></h2>
                                <?php if( have_rows('treatment_right') ): ?>
                                    <div class="bottomPriceList">
                                        <?php while( have_rows('treatment_right') ): the_row(); ?>
                                        <div class="treatmentWrapper">
                                            <p><?php the_sub_field('treatment_name_right'); ?></p>                                
                                            <p><?php the_sub_field('treatment_price_right'); ?></p>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>                        
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?> 
                
                
            </div>
            <img class="bottomRight moveRight" src="<?php echo get_template_directory_uri(); ?>/images/pricesTopRight.png" alt="Dr Deepa Panch">

        </section>
    </div>
<script>
      
      gsap.registerPlugin(ScrollTrigger);

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

          let logo = document.querySelector('.introBanner .logoWrapper');
          let titleWrapper = document.querySelector('.container .titleWrapper');
          let introText = document.querySelector('.container .introText');
          let mail = document.querySelector('.mailSVG');
          let nav = document.querySelector('header .nav');
          let mainTitle = document.querySelector('.mainTitleWrapper');
        
          tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.25})
          tlHome.to(mainTitle, {opacity:1, y:0, duration: .5}, "=-.25")
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "=-.5")
          tlHome.to(introText, {x:0, duration: 0.5, opacity:1}, "-=.5")
        //   tlHome.to(mail, {duration: 0.5, x:0, opacity:1}, "-=.5")
          
        },
        
        // desktop
        [desktopBP]: function() {
          var tlHome = gsap.timeline({ease: "power3"})
  
          let logo = document.querySelector('.introBanner .logoWrapper');
          let titleWrapper = document.querySelector('.container .titleWrapper');
          let introText = document.querySelector('.container .introText');
          let ig = document.querySelector('.igSVG');
          let mail = document.querySelector('.mailSVG');
          let nav = document.querySelector('header .nav');
          let mainTitle = document.querySelector('.mainTitleWrapper');

          tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.25})
          tlHome.to(mainTitle, {opacity:1, y:0, duration: .5}, "=-.25")
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "=-.5")
          tlHome.to(introText, {x:0, duration: 0.5, opacity:1}, "-=.5")
        //   tlHome.to(ig, {duration: 0.5, x:0, opacity:1}, "-=.5")
        //   tlHome.to(mail, {duration: 0.5, x:0, opacity:1}, "-=.5")

        },

        // tablet
        [tabletBP]: function() {

          var tlHome = gsap.timeline({ease: "power3"})
          
          let logo = document.querySelector('.introBanner .logoWrapper');
          let titleWrapper = document.querySelector('.container .titleWrapper');
          let introText = document.querySelector('.container .introText');
          let ig = document.querySelector('.igSVG');
          let mail = document.querySelector('.mailSVG');
          let nav = document.querySelector('header .nav');
          let mainTitle = document.querySelector('.mainTitleWrapper');

          tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.25})
          tlHome.to(mainTitle, {opacity:1, y:0, duration: .5}, "=-.25")
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "=-.5")
          tlHome.to(introText, {x:0, duration: 0.5, opacity:1}, "-=.5")
        //   tlHome.to(ig, {duration: 0.5, x:0, opacity:1}, "-=.5")
        // //   tlHome.to(mail, {duration: 0.5, x:0, opacity:1}, "-=.5")

       
        },
    
        // above mobile
        [largemobileBP]: function() {
          
          var tlHome = gsap.timeline({ease: "power3"})
          
          let logo = document.querySelector('.introBanner .logoWrapper');
          let titleWrapper = document.querySelector('.container .titleWrapper');
          let introText = document.querySelector('.container .introText');
          let ig = document.querySelector('.igSVG');
          let mail = document.querySelector('.mailSVG');
          let mainTitle = document.querySelector('.mainTitleWrapper');

          tlHome.to(mainTitle, {opacity:1, y:0, duration: .5, delay: 0.1})
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "=-.5")
          tlHome.to(introText, {x:0, duration: 0.5, opacity:1}, "-=.5")
        //   tlHome.to(ig, {duration: 0.5, x:0, opacity:1}, "-=.5")
        //   tlHome.to(mail, {duration: 0.5, x:0, opacity:1}, "-=.5")
        },
        // mobile
        [mobileBP]: function() {
           
          var tlHome = gsap.timeline({ease: "power3"})
          
          let logo = document.querySelector('.introBanner .logoWrapper');
          let titleWrapper = document.querySelector('.container .titleWrapper');
          let introText = document.querySelector('.container .introText');
          let ig = document.querySelector('.igSVG');
          let mail = document.querySelector('.mailSVG');
          let mainTitle = document.querySelector('.mainTitleWrapper');

          tlHome.to(mainTitle, {opacity:1, y:0, duration: .5, delay: 0.1})
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "=-.5")
          tlHome.to(introText, {x:0, duration: 0.5, opacity:1}, "-=.5")
        //   tlHome.to(ig, {duration: 0.5, x:0, opacity:1}, "-=.5")
        //   tlHome.to(mail, {duration: 0.5, x:0, opacity:1}, "-=.5")


        },
        
        // all 
        "all": function() {
        
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

            // move right
            function moveRight() {
            gsap.utils.toArray(".moveRight").forEach(function (elem) {
                gsap.to(elem, {
                x: "100px",
                autoAlpha: 1,
                // ease: "expo", 
                scrollTrigger: {
                    // markers: true,
                    start: "top 95%",
                    end: "bottom top",
                    invalidateOnRefresh: true,
                    toggleActions:"play none none reverse",

                    // endTrigger: 'html',
                    trigger: elem,
                    scrub: 1
                }
                });
            });
            }
            moveRight();
        
            // move right
            function moveLeft() {
            gsap.utils.toArray(".moveLeft").forEach(function (elem) {
                gsap.to(elem, {
                x: "-100px",
                autoAlpha: 1,
                // ease: "expo", 
                scrollTrigger: {
                    // markers: true,
                    start: "top 95%",
                    end: "bottom top",
                    invalidateOnRefresh: true,
                    toggleActions:"play none none reverse",

                    // endTrigger: 'html',
                    trigger: elem,
                    scrub: 1
                }
                });
            });
            }
            moveLeft();


        }

    });

</script>

<?php get_footer(); ?>