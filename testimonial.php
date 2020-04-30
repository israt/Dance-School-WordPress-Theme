<?php
/************
 * Template Name: Testimonial
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
    	<ul class="testimonial-inner">
                	<?php
					$args = array(
					'post_type' => 'testi',
					  'orderby' => 'name',
					  'order' => 'DESC',
					  	
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
                     <li> 
                        <div class="col-md-12 col-sm-12">
                            <div class="comments">
                            	<?php the_content(); ?>
                            </div>
                            <div class="border2">
                            	<hr/>
                            </div>
                            <div class="client">
                                <p><?php the_title();  ?><?php the_subtitle(); ?></p>
                            </div>
                        </div>
                        <!--col-md-10 ends....-->
                    </li>
                     <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                    
                    
                </ul>
    </div>
    <!--container ends...-->
</section>
<!--inner-content ends......-->

<?php get_footer(); ?>
    