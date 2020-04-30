<?php
/************
 * Template Name: Contact Us
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
                
                        <!--contact starts...--> 
                            <div class="contact2">
                                <div class="col-md-6">
                                        <div class="contact-book">
                                        	<?php echo of_get_option('c2','no entry');?>
                                        </div>
                                        <div class="contact_map">
                                        	<?php echo of_get_option('map','no entry');?>
                                        </div>
                                </div>
                                <!--col-md-6 ends...-->
                                
                                <div class="col-md-6">
                                      <div class="form_area_inner con">
                                        <h2><b>Your Enquiry</b></h2>
                                        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?> 
                                    </div>
                          </div>
                          <!--col-md-6 ends...-->
                       </div>
                       <!--contact ends...--> 
             </div>
       <!--inner-content ends...-->
    </div>
    <!--container ends...-->
</section>
<!--inner-content ends......-->
    
<?php get_footer(); ?>