<?php

/************

 * Template Name: Video Gallery

 ***********/

get_header(); ?>



<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/video.js"></script>





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



					'post_type' => 'vgallery',



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

        

        

        	<div class="col-md-6 col-sm-6">

            	<div class="single-gal-image">

                	<div class="single-img">

                     	<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $link=get_post_meta(get_the_ID(),"videolink",true)?>" frameborder="0" allowfullscreen></iframe>   

   						

    

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

    