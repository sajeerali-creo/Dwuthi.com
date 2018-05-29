<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?>
<footer id="foot">
  <center>
    <h1 class="scrollpoint sp-effect1"><strong>Hang</strong> with us</h1>
    <h3><img src="<?php bloginfo('template_url'); ?>/images/footer-icon.svg"></h3>
    <h2><span>Dwuthi</span> Designs</h2>
    <i>+91 97466 12013</i>
    <i>dwuthiviz@gmail.com</i>
    <div class="social scrollpoint sp-effect3">
      <a href="https://www.facebook.com/Dwuthi-Visualizers-764525817026019/" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
      <a href="https://twitter.com/dwuthi"><i class="zmdi zmdi-twitter" target="_blank"></i></a>
      <a href="https://in.pinterest.com/dwuthi/"><i class="zmdi zmdi-pinterest" target="_blank"></i></a>
    </div>
    <p>Copyright © 2016. dwuthi Designs All rights reserved designed by <a href="http://www.creotopi.com/">creotopi.com</a></p>
  </center>
</footer>

<!--SCRIPT-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>




<script type="text/javascript" >

  $(document).ready(function(){
    $(document).scroll(function(e){     
      var curScroll = $(window).scrollTop();
      var docHeight = $(document).height();
      var winHeight = $(window).height();     
      if(curScroll >= (docHeight - winHeight)*0.2)
      {
        
        $('#mainHead').hide();
        $('#second').show();
      }
      else
      {
        $('#mainHead').show();
        $('#second').hide();
      }
                
      });
  });

</script>

<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/waypoints.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<script>
  $(document).ready(function() {
    $('a[href^="#"]').click(function(event) {
      var id = $(this).attr("href");
      var offset = 60;
      var target = $(id).offset().top - offset;

      $('html, body').animate({scrollTop:target}, 1000);
      event.preventDefault();
    });
  });
</script> 

<!-- custom scrollbar plugin -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
  
  <script>
    (function($){
      $(window).load(function(){
        
        $("a[rel='load-content']").click(function(e){
          e.preventDefault();
          var url=$(this).attr("href");
          $.get(url,function(data){
            $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
            //scroll-to appended content 
            $(".content").mCustomScrollbar("scrollTo","h2:last");
          });
        });
        
        $(".content").delegate("a[href='top']","click",function(e){
          e.preventDefault();
          $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
        });
        
      });
    })(jQuery);
  </script>

</body>
</html>