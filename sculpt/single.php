<?php get_header(); ?>
      
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="featuredImage" style="opacity:0;">
                <div class="wrapper">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail('twentytwenty-fullscreen'); ?>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-template.jpg" alt="Banner" />
                    <?php } ?>
                </div>
            </section>

            <section class="blogTitle">
                <div class="wrapper">
                    <div class="titleWrapper" style="opacity:0;transform:translateX(50px);">
                        <h1><?php the_title(); ?></h1>
                        <div class="time">
                            <span><?php the_field('read_time'); ?></span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainContent" style="opacity:0;transform:translateY(50px);">
                <div class="wrapper">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <section class="share onScreen fadeLeft">
                <div class="wrapper">
                    <div class="shareWrapper">
                        <div class="shareButton">
                            <?php $permalink = get_permalink(); ?>
                            <span class="shareText">Share:</span>
                            <span class="linkWrapper linkWrapperOne">
                                <a target="_blank" class="facebook" href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='. $permalink .''; ?>">Facebook</a>
                            </span>
                            <span class="linkWrapper linkWrapperThree">
                                <a target="_blank" class="twitter" href="<?php echo 'https://twitter.com/intent/tweet?url=https%3A%2F%2F'. $permalink .'&text='; ?>">Twitter</a>
                            </span>
                            <span class="linkWrapper linkWrapperTwo">
                                <a target="_blank" class="linkedin" href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url='. $permalink .'&title='; ?>">LinkedIn</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'recent.php'; ?>

        <?php endwhile; wp_reset_query(); ?>
    <?php endif; ?>  

        <script>

            gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);


                // Clicking the accept button on cookies
                // document.querySelector(".shareText").onclick = function() {acceptFunction()};

                // /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
                // function acceptFunction() {
                //     document.querySelector(".shareButton").classList.toggle("clicked");
                //     document.querySelector(".shareText").classList.toggle("hide");
                //     document.querySelector(".linkWrapperOne").classList.toggle("show");
                //     document.querySelector(".linkWrapperTwo").classList.toggle("show");
                //     document.querySelector(".linkWrapperThree").classList.toggle("show");
                //     document.querySelector(".shareIcon").classList.toggle("hide");

                // }

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
                    let innerIntro = document.querySelector('.featuredImage');
                    let text = document.querySelector('.blogTitle .titleWrapper');
                    let mainContent = document.querySelector('.mainContent');
                    tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
                    tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
                    tlHome.to(mainNav, {opacity:1, duration: .5})
                    tlHome.to(innerIntro, {opacity:1, duration: .5})
                    tlHome.to(text, {duration: 0.5, opacity:1, x:0})
                    tlHome.to(mainContent, {duration: 0.5, opacity:1, y:0})


                },
            
                // desktop
                [desktopBP]: function() {
                 
          

                    var tlHome = gsap.timeline({ease: "power3"})
                    let logo = document.querySelector('.logoWrapper');
                    let loginLink = document.querySelector('.desktopLogin');
                    let mainNav = document.querySelector('.mainNav')
                    let innerIntro = document.querySelector('.featuredImage');
                    let text = document.querySelector('.blogTitle .titleWrapper');
                    let mainContent = document.querySelector('.mainContent');
                    tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
                    tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
                    tlHome.to(mainNav, {opacity:1, duration: .5})
                    tlHome.to(innerIntro, {opacity:1, duration: .5})
                    tlHome.to(text, {duration: 0.5, opacity:1, x:0})
                    tlHome.to(mainContent, {duration: 0.5, opacity:1, y:0})


                },

                // tablet
                [tabletBP]: function() {
                  
                    var tlHome = gsap.timeline({ease: "power3"})

                    let innerIntro = document.querySelector('.featuredImage');
                    let text = document.querySelector('.blogTitle .titleWrapper');
                    let mainContent = document.querySelector('.mainContent');
                    let nav = document.querySelector('.bottomNav');

                    tlHome.to(innerIntro, {opacity:1, duration: .5})
                    tlHome.to(text, {duration: 0.5, opacity:1, x:0})
                    tlHome.to(mainContent, {duration: 0.5, opacity:1, y:0})
                    tlHome.to(nav, {duration: 0.5, opacity:1, y:0})

                },

                // above mobile
                [largemobileBP]: function() {

                    var tlHome = gsap.timeline({ease: "power3"})

                    let innerIntro = document.querySelector('.featuredImage');
                    let text = document.querySelector('.blogTitle .titleWrapper');
                    let mainContent = document.querySelector('.mainContent');
                    let nav = document.querySelector('.bottomNav');

                    tlHome.to(innerIntro, {opacity:1, duration: .5})
                    tlHome.to(text, {duration: 0.5, opacity:1, x:0})
                    tlHome.to(mainContent, {duration: 0.5, opacity:1, y:0})
                    tlHome.to(nav, {duration: 0.5, opacity:1, y:0})

                },
                // mobile
                [mobileBP]: function() {
                    
                    var tlHome = gsap.timeline({ease: "power3"})

                    let innerIntro = document.querySelector('.featuredImage');
                    let text = document.querySelector('.blogTitle .titleWrapper');
                    let mainContent = document.querySelector('.mainContent');
                    let nav = document.querySelector('.bottomNav');

                    tlHome.to(innerIntro, {opacity:1, duration: .5})
                    tlHome.to(text, {duration: 0.5, opacity:1, x:0})
                    tlHome.to(mainContent, {duration: 0.5, opacity:1, y:0})
                    tlHome.to(nav, {duration: 0.5, opacity:1, y:0})


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
