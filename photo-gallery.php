<?php
/************
 * Template Name: Photo Gallery
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
    	<div class="inner-content">
        
        <?php

					$args = array(

					'post_type' => 'Gallery',

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
        
        
        	<div class="col-md-3 col-sm-3">
            	<div class="single-gal-image">
                	<div class="single-img">
                         <img src="<?php echo $feat_image3; ?>" alt="order" />                  
                         <div class="links">
    <a class="fancybox" href="<?php echo $feat_image3; ?>" data-fancybox-group="gallery" title="<?php the_title();  ?>"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                         </div>
                     </div>
                     <!--single-img ends...-->
                </div>
                <!--single-gal-image ends...-->
            </div>
            <!--col-md-3 col-sm-3 ends..-->
             <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                                                            
       </div>
       <!--inner-content ends...-->
    </div>
    <!--container ends...-->
</section>
<!--inner-content ends......-->
    
<?php get_footer(); ?>
    