<?php
/************

 *  This is single News Template file *


 ***********/

get_header(); ?>

<?php
     $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    }
    ?>

<style type="text/css">
	section.inner-heading{
    		background: url(<?php echo $feat_image3; ?>) no-repeat;
			background-size:cover;
    }
</style>

<!--inner page heading starts....-->
<section class="inner-heading">
	<div class="container">
    	<div class="heading-content">
        	<h2><?php the_title();?></h2>
            <ul>
              <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              <li><a href="#"><?php the_title();?></a></li>
            </ul>
        </div>
        <!--heading-content ends...-->
    </div>
    <!--container ends...-->
</section>
<!--inner page heading ends......-->

<!--inner page content starts....-->
<section class="inner-page-content">
	<div class="container">
    	<div class="col-md-12">
        	<div class="inner-content">
            	 <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                <?php
				 $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				}
				?>
            
                        <div class="single-event-inner">
                        	<div class="single-event-inner-img">
                            	<img src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>">
                            </div>
                            <!--single-event-inner-img ends....-->
                            
                            <div class="single-event-title-inner">
                                 <h3><?php the_title();?></h3>
                                 <a href="#"><?php the_time('F jS, Y'); ?>/ Posted by <span><?php the_author(); ?></span></a>
                            </div>
                            <!--single-event-title-inner ends....-->
                                        
                            <div class="single-event-content-inner">
                                 <?php the_content(); ?> 
                            </div>
                            <!--single-event-content-inner ends....-->
                            
                        </div>
                        <!--single-event-inner ends....-->
                        
            </div>
            <!--inner-heading ends....	-->
            <?php
						// End the loop.
						endwhile;
						?>
        </div>
        <!--col-md-12 ends....-->
    </div>	
    <!--container ends....-->
</section>
<!--inner-page-heading ends....-->

<?php get_footer(); ?>
    