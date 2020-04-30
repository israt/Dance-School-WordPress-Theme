<?php
/************
 * Template Name: News
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
<section class="inner-content-wrapper">
	<div class="container pad-0">
    	<?php

					$args = array(

					'post_type' => 'news',

					  'orderby' => 'name',

					  'order' => 'ASC',	

					  );					  

					  $query = new WP_Query($args);

						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();



			  ?>
              <?php
     $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    }
    ?>
        
    
    
    	<div class="event-area-inner">
                        	<div class="col-md-4">
                                    <div class="event-image-inner">
                                        <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>">
                                    </div>
                                    <!--event-image-inner ends....-->
                            </div>
                            <!--col-md-4 ends....-->
                            
                            <div class="col-md-8">
                                	<div class="event-left">
                                        <div class="event-title-inner">
                                            <a href="<?php the_permalink(); ?>"><h3><?php the_title();  ?></h3></a>
                                            <a href="#"><?php the_time('F jS, Y'); ?></a>
                                        </div>
                                        <!--event-title-inner ends....-->
                                        
                                        <div class="event-content-inner">
                                        	<?php echo substr(strip_tags($post->post_content), 0,400); ?>
                                        </div>
                                        <!--event-content-inner ends....-->
                                        
                                        <div class="read-more2">
                                            <a href="<?php the_permalink(); ?>"><span>[</span>&nbsp;Read More&nbsp;<span>]</span></a>
                                        </div>	
                                        <!--read-more ends...-->
                                        </div>
                                    <!--event-left ends....-->
                            </div>
                            <!--col-md-4 ends....-->
                        </div>
                        <!--event-area-inner ends.....-->
                        
                      <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>    
    </div>
    <!--container ends...-->
</section>
<!--inner-content ends......-->

<?php get_footer(); ?>
    