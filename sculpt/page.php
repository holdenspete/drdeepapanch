<?php get_header(); ?>
    
<div class="container joinContainer">
    <section class="general" style="background-color: #fffcfb;">

        <div class="wrapper">
            <div class="titleWrapper" style="transform:translateX(50px);opacity:0;">
                <h1 class="largeh1"><span><?php the_title(); ?>.</span></h1>
            </div>
           
            <div class="mainText" style="transform:translateY(50px);opacity:0;">
                <div class="leftSide">
                    <?php the_content(); ?>
                </div>
                
            </div>

        </div>
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
            
            let nav = document.querySelector('header .nav');
            // let logo = document.querySelector('.contactTop .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.titleWrapper');
            let mainText = document.querySelector('.mainText');
            // let firstPara = document.querySelector('.contactPlaces .wrapper .berkshire .rightSide');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            // tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(mainText, {y:0, duration: 0.5, opacity:1}, "-=.5")
        },
        
        // desktop
        [desktopBP]: function() {
            var tlHome = gsap.timeline({ease: "power3"})
            
            let nav = document.querySelector('header .nav');
            // let logo = document.querySelector('.contactTop .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.titleWrapper');
            let mainText = document.querySelector('.mainText');
            // let firstPara = document.querySelector('.contactPlaces .wrapper .berkshire .rightSide');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            // tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(mainText, {y:0, duration: 0.5, opacity:1}, "-=.5")
        },

        // tablet
        [tabletBP]: function() {
            var tlHome = gsap.timeline({ease: "power3"})
            
            let nav = document.querySelector('header .nav');
            // let logo = document.querySelector('.contactTop .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.titleWrapper');
            let mainText = document.querySelector('.mainText');
            // let firstPara = document.querySelector('.contactPlaces .wrapper .berkshire .rightSide');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            // tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {x:0, duration: 0.5, opacity:1})
            tlHome.to(mainText, {y:0, duration: 0.5, opacity:1}, "-=.5")
        },
    
        // above mobile
        [largemobileBP]: function() {
          
            var tlHome = gsap.timeline({ease: "power3"})
          
            let nav = document.querySelector('header .nav');
            let logo = document.querySelector('.contactTop .wrapper .logoWrapper');
            let titleWrapper = document.querySelector('.contactTop .titleWrapper');
            let firstImage = document.querySelector('.contactPlaces .wrapper .berkshire .leftSide');
            let firstPara = document.querySelector('.contactPlaces .wrapper .berkshire .rightSide');

            tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
            tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
            tlHome.to(titleWrapper, {y:0, duration: 0.5, opacity:1})
            tlHome.to(firstImage, {x:0, duration: 0.5, opacity:1}, "-=.5")
            tlHome.to(firstPara, {x:0, duration: 0.5, opacity:1}, "-=.5")
        },
        // mobile
        [mobileBP]: function() {
           
          var tlHome = gsap.timeline({ease: "power3"})
          
          let nav = document.querySelector('header .nav');
          let logo = document.querySelector('.contactTop .wrapper .logoWrapper');
          let titleWrapper = document.querySelector('.contactTop .titleWrapper');
          let firstImage = document.querySelector('.contactPlaces .wrapper .berkshire .leftSide');
          let firstPara = document.querySelector('.contactPlaces .wrapper .berkshire .rightSide');

          tlHome.to(nav, {duration: 0.5, y:0, opacity:1, delay: 0.1})
          tlHome.to(logo, {opacity:1, y:0, duration: .5}, "-=.5")
          tlHome.to(titleWrapper, {y:0, duration: 0.5, opacity:1})
          tlHome.to(firstImage, {x:0, duration: 0.5, opacity:1}, "-=.5")
          tlHome.to(firstPara, {x:0, duration: 0.5, opacity:1}, "-=.5")

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

        }

    });

</script>

        
<?php get_footer(); ?>