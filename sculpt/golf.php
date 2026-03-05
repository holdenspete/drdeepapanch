<!--

Template name: Golf page

-->
  
<?php get_header(); ?>

  
  <!-- <div class="container" style=""> -->
    <section class="golfContainer">
      <div class="wrapper">
        <div class="titleWrapper">
          <h1 style="opacity:1;">Scorecard</h1>
        </div>
        
        <div class="mainText">
            
        </div>

      </div>
    </section>



  <!-- </div> -->
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
          
        },

        // desktop
        [desktopBP]: function() {
        
        },

        // tablet
        [tabletBP]: function() {

        },
    
        // above mobile
        [largemobileBP]: function() {
       
        },
        // mobile
        [mobileBP]: function() {
        
        },
        
        // all 
        "all": function() {
        

        }


    });

</script>

        
<?php get_footer(); ?>