<!--

Template name: Treatments page

-->
  
<?php get_header(); ?>

  <div class="container">
  
    <section class="treatments" style="background-color: #DDB5A5;">
        <div class="wrapper">
            <img class="topLeftBG moveLeft" src="<?php echo get_template_directory_uri(); ?>/images/topTreatment.png" alt="Dr Deepa Panch">
            <img class="treatmentsCloudLeft" src="<?php echo get_template_directory_uri(); ?>/images/treatmentsCloudLeft.png" alt="Dr Deepa Panch">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logoWrapper" style="transform:translateY(50px);opacity:0;">
                <svg width="79" height="145" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 78.6 145" style="enable-background:new 0 0 78.6 145" xml:space="preserve"><style>.st0{fill:#af493d}</style><g id="Logo_Icon"><g transform="translate(0 -.001)"><path id="Path_1055-2" class="st0" d="M39.3 143.2c-15.9 0-30.1-10-35.6-24.9C.9 111 1.5 103 1.3 95.4 1.1 87.8 1 80.2 1 72.6c0-6.6.2-16.1.3-22.8.3-7.7-.3-15.6 2.5-22.9C9.2 12 23.4 2 39.3 2c19.9-.3 37.4 16.4 37.8 36.4.4 15.2.5 30.4.4 45.6-.2 6.7-.2 16.2-.4 22.8-.1 3.9-.9 7.8-2.2 11.5-5.5 14.9-19.7 24.9-35.6 24.9m0-.6c19.4-.1 35.2-15.9 35.1-35.3v-.6c-.6-22.6-.6-45.8 0-68.3C74.8 19 59.4 3 40 2.6c-2.1 0-4.2.1-6.3.4-13.2 2.2-24.1 11.7-28 24.6-1.1 3.5-1.6 7.2-1.5 10.9l.2 11.4c.2 6.7.3 16.1.3 22.7 0 7.6-.1 15.2-.2 22.8 0 7.4-1.1 15 1.3 22.2 4.4 14.9 18 25 33.5 25"/></g><g transform="translate(0 -.001)"><path id="Path_1056-2" class="st0" d="M43 54.8c-.3-.1-.7-.2-1-.2-.2 0-.4-.1-.6-.1-.5-.1-.9-.1-1.4-.2-.5-.1-.9-.1-1.4-.1h-1.4c-1.5 0-3 0-4.5.1h-4.3V65c.5-.1.9-.2 1.4-.3.1 0 .3-.1.4-.1.5-.1.9-.3 1.4-.5.3-.1.7-.3 1-.5.1-.1.3-.1.4-.2V55c1-.1 2.1-.1 3.2-.1.8 0 1.6 0 2.2.1.3 0 .5 0 .8.1.2 0 .4.1.6.1.4.1.9.2 1.3.4s.9.4 1.4.6l.1.1c.4.2.7.4 1.1.6.4.2.8.5 1.2.8.5.4 1 .8 1.4 1.3 1.2 1.6 2.2 3.3 2.7 5.2.8 2.7 1.2 5.6 1.2 8.4 0 1.6-.1 3.2-.3 4.7.5 0 .9 0 1.4.1.6 0 1.1.1 1.7.2.5.1.9.1 1.4.2.3-1.6.5-3.2.5-4.8.1-2.7-.3-5.4-1-8-.6-1.9-1.5-3.7-2.8-5.3-1.2-1.4-2.6-2.5-4.1-3.3-.4-.2-.9-.4-1.3-.6-.4-.2-.9-.4-1.3-.5-.5-.3-1-.4-1.4-.5"/></g><g transform="translate(0 -.001)"><path id="Path_1057-2" class="st0" d="m29.9 67 1.8-.3c.5-.1.9-.2 1.4-.3.5-.1.9-.3 1.4-.4 1.7-.6 3.4-1.5 4.8-2.6 1.8-1.4 3.2-3.2 4-5.3-.4-.2-.8-.5-1.2-.6H42c-.5-.2-.9-.4-1.2-.5-.4-.2-.9-.3-1.3-.4-.3 1.2-.7 2.3-1.3 3.3-.6 1.2-1.4 2.2-2.3 3.1-.5.5-1 .9-1.5 1.3-.4.3-.7.5-1.1.7-.1 0-.2.1-.3.1-.4.2-.9.4-1.4.6-.3.1-.7.2-1 .3-.3.1-.5.1-.8.2-.5.1-.9.2-1.4.2h-2.6c-1.1 0-1.9 0-2.6-.1V31.2c1-.1 2.1-.1 3.2-.1 1 0 2 0 3 .2 1.2.2 2.4.6 3.4 1.2 1.4.6 2.7 1.6 3.7 2.7 1.2 1.6 2.2 3.3 2.7 5.2.8 2.7 1.2 5.6 1.2 8.4 0 1.4-.1 2.8-.2 4.2.4 0 .9.1 1.4.2.2 0 .4.1.6.1.3.1.7.1 1 .2.4.1.9.2 1.3.4.3-1.5.4-3.1.4-4.7.1-2.7-.3-5.4-1-8-.6-1.9-1.5-3.7-2.8-5.3-1.2-1.4-2.6-2.5-4.1-3.3-1.5-.8-3.2-1.4-4.9-1.8-1.5-.3-3.1-.5-4.7-.5-1.5 0-3 0-4.5.1h-4.3V67h2.7c1.9.1 3.7.2 5.4.2h.3c.5 0 .9 0 1.4-.1.6 0 1 0 1.5-.1"/></g><g transform="translate(0 -.001)"><path id="Path_1058-2" class="st0" d="M55.4 79.4c-.4-.1-.9-.2-1.3-.3-.4-.1-.9-.2-1.4-.2-.5-.1-1-.1-1.6-.2-.4 0-.9-.1-1.4-.1h-1.4c-2.9 0-6.3.2-10.1.4h-.1v9.8c.5 0 .9-.1 1.4-.2l.6-.1c.4-.1.8-.2 1.2-.4.4-.2.8-.3 1.1-.5.1 0 .2-.1.2-.1v-7.6c1.9-.2 3.7-.3 5.5-.3h1.5c.5 0 .9.1 1.4.1.5.1 1 .2 1.4.3.4.1.9.3 1.3.5s.8.5 1.2.8c.2.1.3.3.5.4 1.5 1.7 2.3 4 2.2 6.3 0 6.7-2.4 10.2-7.2 10.4h-7.6v-6.7c-.5.1-.9.2-1.4.3l-1.8.3c-.5.1-.9.1-1.4.1v22.9h4.6V99.1h7.6c2 0 4-.3 5.8-1 1.4-.6 2.7-1.5 3.6-2.8 1.5-2.2 2.3-4.8 2.2-7.5-.1-4.3-2.3-7.1-6.6-8.4"/></g><g transform="translate(0 -.001)"><path id="Path_1059-2" class="st0" d="m39.5 90.8 1.8-.3c.5-.1.9-.2 1.4-.3.5-.1.9-.3 1.4-.4 1.8-.6 3.5-1.5 5-2.7 1.8-1.4 3.2-3.3 4.1-5.5-.4-.2-.8-.4-1.3-.5-.4-.1-.8-.2-1.3-.3-.5-.1-.9-.1-1.4-.1-.3 1-.7 1.9-1.1 2.8-.6 1.2-1.4 2.2-2.3 3.1-.5.5-1.1 1-1.6 1.4-.3.2-.6.4-1 .6-.1.1-.3.1-.4.2-.4.2-.9.4-1.4.6l-.9.3c-.3.1-.6.2-.9.2-.4.1-.9.2-1.4.2h-2.5c-1.1 0-1.9 0-2.6-.1V67.8c-.5.1-.9.2-1.4.3l-1.8.3c-.5.1-.9.1-1.4.1v22.3h2.7c1.9.1 3.7.2 5.4.2H38.2c.4-.1.9-.1 1.3-.2"/></g></g></svg>
            </a>
            <div class="titleWrapper" style="transform:translateX(50px);opacity:0;"><h1 class="largeh1">Our Treatments</h1></div>
            <div class="text">
                <h2 class="bespokeTitle" style="transform:translateX(50px);opacity:0;"><?php the_field('intro_title'); ?></h2>
                <div class="bottomText" style="transform:translateX(-50px);opacity:0;">
                    <?php the_field('intro'); ?>
                </div>
            </div>
            <div class="booking">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" target="_blank" class="bookButton bgDarkRed">Book now</a>
            </div>
            <?php if( have_rows('treatment',2) ): ?>
            <div class="allTreatments">
                <?php while( have_rows('treatment',2) ): the_row(); ?>
                    <div class="treatment onScreen" style="background-image: url(<?php the_sub_field('treatment_bg_image',2); ?>);">
                    <h3 class="fiftyFourTitle"><?php the_sub_field('treatment_title',2); ?></h3>
                    <p><?php the_sub_field('treatment_short_description',2); ?></p>
                    <a href="<?php the_sub_field('treatment_button_link',2); ?>" class="button">
                        <svg class="buttonBG" xmlns="http://www.w3.org/2000/svg" width="158.239" height="58.199" viewBox="0 0 158.239 58.199"><path d="M0,29.1a28.412,28.412,0,0,1,22.9-27.75c.373-.078,1.555-.267,1.871-.33l.378-.031c.425-.027,1.819-.139,2.277-.17C62.65-.193,97.906-.414,133.113,1l.379.031.375.066c.6.145,2.323.347,2.975.588l1.459.407c.242.071.488.127.725.212l.706.274,1.409.548a28.29,28.29,0,0,1,7.587,47.126,32.081,32.081,0,0,1-4.877,3.5c-.66.354-1.716.857-2.356,1.193-.639.263-1.831.7-2.466.96a32.293,32.293,0,0,1-3.665.945c-.373.078-1.555.266-1.871.33-2.13.212-4.93.282-7.093.321-33.491.932-67,1-100.485-.242l-.758-.057-.379-.031-.375-.065c-.6-.145-2.323-.347-2.975-.588A28.416,28.416,0,0,1,0,29.1m.5,0A26.662,26.662,0,0,0,25.3,55.615c1.918.1,4.621.012,6.572-.041q47.265-1.38,94.529-.01c2.065.062,4.847.135,6.931.031l.355-.045,1.424-.181C147.9,53.7,157.86,41.976,157.764,29.1c.051-13.509-10.6-25.345-24.079-26.457a12.874,12.874,0,0,0-1.432-.074c-1.614-.07-4.2.016-5.855.059Q77.657,4.075,28.916,2.566c-1.154-.065-2.471.013-3.618.03A26.656,26.656,0,0,0,.5,29.1" transform="translate(-0.001 0)" fill="#fff"/></svg>
                        <span>Read more</span>
                    </a>
                    </div>
                <?php endwhile; ?>
                <img class="bottomRightBG moveRight" src="<?php echo get_template_directory_uri(); ?>/images/topTreatment.png" alt="Dr Deepa Panch">

            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include 'testimonials.php'; ?>

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
            
            let nav = document.querySelector('header .nav');
            let logo = document.querySelector('.treatments .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.treatments .titleWrapper');
            let headerTwo = document.querySelector('.treatments .wrapper .text h2');
            let intropara = document.querySelector('.treatments .wrapper .text .bottomText');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(headerTwo, {x:0, duration: 0.5, opacity:1}, "-=.5")
            tlHome.to(intropara, {x:0, duration: 0.5, opacity:1}, "-=.5")

        },
        
        // desktop
        [desktopBP]: function() {
          var tlHome = gsap.timeline({ease: "power3"})
  
            let nav = document.querySelector('header .nav');
            let logo = document.querySelector('.treatments .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.treatments .titleWrapper');
            let headerTwo = document.querySelector('.treatments .wrapper .text h2');
            let intropara = document.querySelector('.treatments .wrapper .text .bottomText');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(headerTwo, {x:0, duration: 0.5, opacity:1}, "-=.5")
            tlHome.to(intropara, {x:0, duration: 0.5, opacity:1}, "-=.5")

        },

        // tablet
        [tabletBP]: function() {
            var tlHome = gsap.timeline({ease: "power3"})
          
            let nav = document.querySelector('header .nav');
            let logo = document.querySelector('.treatments .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.treatments .titleWrapper');
            let headerTwo = document.querySelector('.treatments .wrapper .text h2');
            let intropara = document.querySelector('.treatments .wrapper .text .bottomText');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(headerTwo, {x:0, duration: 0.5, opacity:1}, "-=.5")
            tlHome.to(intropara, {x:0, duration: 0.5, opacity:1}, "-=.5")
       
        },
    
        // above mobile
        [largemobileBP]: function() {
          
            var tlHome = gsap.timeline({ease: "power3"})

            let nav = document.querySelector('header .nav');
            let logo = document.querySelector('.treatments .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.treatments .titleWrapper');
            let headerTwo = document.querySelector('.treatments .wrapper .text h2');
            let intropara = document.querySelector('.treatments .wrapper .text .bottomText');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1}) 
            tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(headerTwo, {x:0, duration: 0.5, opacity:1}, "-=.5")
            tlHome.to(intropara, {x:0, duration: 0.5, opacity:1}, "-=.5")

        },
        // mobile
        [mobileBP]: function() {
           
          var tlHome = gsap.timeline({ease: "power3"})
          
          let nav = document.querySelector('header .nav');
          let logo = document.querySelector('.treatments .wrapper .logoWrapper');
          let titleWrapper = document.querySelector('.treatments .titleWrapper');
          let headerTwo = document.querySelector('.treatments .wrapper .text h2');
          let intropara = document.querySelector('.treatments .wrapper .text .bottomText');

          tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
          tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
          tlHome.to(headerTwo, {x:0, duration: 0.5, opacity:1}, "-=.5")
          tlHome.to(intropara, {x:0, duration: 0.5, opacity:1}, "-=.5")

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