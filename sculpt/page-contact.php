<!--

Template name: Contact page

-->

<?php get_header(); ?>

<div class="contactContainer" style="background-color: #0E7594;">
    <section class="topIntro" style="background-color: #018c9a;opacity:0;">
      <div class="wrapper">
        <div class="titleWrapper">
          <h1 style="opacity:0;transform:translateX(50px);">Get in touch.</h1>
        </div>
      </div>     
    </section>
    <section class="formSection">
        <div class="wrapper" style="opacity:0;">
            <div class="leftSide onScreen fadeLeft">
                <div class="text">
                    <?php the_field('retailer'); ?>
                    
                    <a href="tel:00443331000888" class="tel">T: 0333 1000 888</a>
                    <a href="mailto:customerservice@banner.co.uk" class="mail">E: customerservice@banner.co.uk</a>
                </div>
                <div class="text">
                    <?php the_field('school'); ?>
                    
                    <a href="tel:0044225710769" class="tel">T: 01225 710769</a>
                    <a href="mailto:hello@banner.co.uk" class="mail">E: hello@banner.co.uk</a>
                </div>
            </div>
            <div class="rightSide onScreen fadeUp">
                <div class="formWrap">
                    <h2>Contact us</h2>
                    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mapArea">
        <div class="wrapper">
            <div class="leftSide onScreen fadein">
                <a target="_blank" href="https://www.google.com/maps/dir//Banner+Kennet+Way+Trowbridge+BA14+8BL/@51.3317035,-2.2036251,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x48717e1b4f4cf589:0x2047edef2c3252a8" target="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contactMap.png" alt="Banner" />
                </a>
            </div>
            <div class="rightSide onScreen fadeUp">
                <div class="inner">
                <svg xmlns="http://www.w3.org/2000/svg" width="118" height="151" viewBox="0 0 118.9 151.2" style="enable-background:new 0 0 118.9 151.2" xml:space="preserve"><path d="m48.3 143.8-33.4-47C-5.7 72.3-2.5 35.8 22 15.3 32.5 6.4 45.7 1.6 59.5 1.7c31.9-.2 58 25.6 58.1 57.5.1 13.7-4.7 27-13.5 37.5l-33.4 47.1c-4.4 6.2-12.9 7.6-19.1 3.2-1.3-.9-2.4-2-3.3-3.2z" style="fill:#e95018" transform="translate(.001)"/><path d="M2.1 37.7c-4.9.1-9.6-2.2-12.7-6.1v5.3h-11.5v-55.4h11.5V2.1c2.8-3.8 6.7-6.6 12.7-6.6 9.5 0 18.5 7.4 18.5 21v.2c0 13.6-8.9 21-18.5 21m7-21.2C9.1 9.8 4.5 5.3-.8 5.3s-9.9 4.5-9.9 11.2v.2c0 6.7 4.5 11.2 9.9 11.2s9.9-4.4 9.9-11.2v-.2z" style="fill:#fff" transform="translate(63.333 46.996)"/></svg>
                <a target="_blank" href="https://www.google.com/maps/dir//Banner+Kennet+Way+Trowbridge+BA14+8BL/@51.3317035,-2.2036251,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x48717e1b4f4cf589:0x2047edef2c3252a8" target="">
                        <span>Banner Ltd.</span><br>
                        Kennet Way<br>
                        Trowbridge<br>
                        Wiltshire<br>
                        BA14 8RN
                    </a>
                </div>
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
                let mainNav = document.querySelector('.mainNav');
                let innerIntro = document.querySelector('.topIntro');
                let h1 = document.querySelector('h1');
                let secondSection = document.querySelector('.formSection .wrapper');

                tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
                tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
                tlHome.to(mainNav, {opacity:1, duration: .5})
                tlHome.to(innerIntro, {opacity:1, duration: .5})
                tlHome.to(h1, {duration: 0.5, opacity:1, x:0})
                tlHome.to(secondSection, {opacity:1, duration: .5})
            },

            // desktop
            [desktopBP]: function() {
          
                var tlHome = gsap.timeline({ease: "power3"})

                let logo = document.querySelector('.logoWrapper');
                let loginLink = document.querySelector('.desktopLogin');
                let mainNav = document.querySelector('.mainNav');
                let innerIntro = document.querySelector('.topIntro');
                let h1 = document.querySelector('h1');
                let secondSection = document.querySelector('.formSection .wrapper');

                tlHome.to(logo, {opacity:1, duration: .5, delay: 0.1})
                tlHome.to(loginLink, {opacity:1, duration: .5}, "-=.5")
                tlHome.to(mainNav, {opacity:1, duration: .5})
                tlHome.to(innerIntro, {opacity:1, duration: .5})
                tlHome.to(h1, {duration: 0.5, opacity:1, x:0})
                tlHome.to(secondSection, {opacity:1, duration: .5})


            },

            // tablet
            [tabletBP]: function() {
                var tlHome = gsap.timeline({ease: "power3"})

                let innerIntro = document.querySelector('.topIntro');
                let h1 = document.querySelector('h1');
                let nav = document.querySelector('.bottomNav');
                let secondSection = document.querySelector('.formSection .wrapper');

                tlHome.to(innerIntro, {opacity:1, duration: .5})
                tlHome.to(h1, {duration: 0.5, opacity:1, x:0})
                tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
                tlHome.to(secondSection, {opacity:1, duration: .5})

            },

            // above mobile
            [largemobileBP]: function() {
                var tlHome = gsap.timeline({ease: "power3"})

                let innerIntro = document.querySelector('.topIntro');
                let h1 = document.querySelector('h1');
                let nav = document.querySelector('.bottomNav');
                let secondSection = document.querySelector('.formSection .wrapper');

                tlHome.to(innerIntro, {opacity:1, duration: .5})
                tlHome.to(h1, {duration: 0.5, opacity:1, x:0})
                tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
                tlHome.to(secondSection, {opacity:1, duration: .5})

              
            },
            // mobile
            [mobileBP]: function() {
                
                var tlHome = gsap.timeline({ease: "power3"})

                let innerIntro = document.querySelector('.topIntro');
                let h1 = document.querySelector('h1');
                let nav = document.querySelector('.bottomNav');
                let secondSection = document.querySelector('.formSection .wrapper');

                tlHome.to(innerIntro, {opacity:1, duration: .5})
                tlHome.to(h1, {duration: 0.5, opacity:1, x:0})
                tlHome.to(nav, {duration: 0.5, opacity:1, y:0})
                tlHome.to(secondSection, {opacity:1, duration: .5})

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