<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
get_header(); ?>

<section class="inner">
<div class="second-header visible-lg visible-sm visible-md visible-xs">
<div class="container">
  <nav> 

  <div class="col-lg-6 col-xs-6">  <a href="http://www.dwuthi.com" class="second-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo-second.svg" class="img-responsive"></a></div>

  <div class="col-lg-6 col-xs-6">
     <ul class="nav navbar-nav">  
     <li><a href=" http://www.dwuthi.com/index/" class="back">back</a></li> 
     </ul> 
  </div>
           
   </nav>
</div>  
</div>
</section>


<section class="detail">
  <div class="container">
    <div class="col-lg-12 col-sm-12 col-xs-12">
      <div class="detail-image">
        <h2><?php echo get_the_title(); ?></h2>
        <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
      </div>
      <div class="detail-image">
        <h3>Related Views</h3>
        <div class="each-pic">
             <div id="primary" class="content-area">
                  <div id="content" class="site-content" role="main">
               
                    <?php /* The loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
               
                      <?php get_template_part( 'content', get_post_format() ); ?>
                     
               
                    <?php endwhile; ?>
               
                  </div><!-- #content -->
                </div><!-- #primary -->
        </div>
      </div>
    </div>
   
  </div>
</section>


<?php get_footer(); ?>