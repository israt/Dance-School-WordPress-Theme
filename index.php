<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>


<!--section.banner-area starts...-->
        <section class="banner-area">
        	<!--carousel starts here.......-->
        	<ul class="bxslider">
            	<?php

					$args = array(

					'post_type' => 'slider',

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
            	 <li>
                         <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>">
                          <div class="carousel-caption">
                          	<p><?php the_subtitle(); ?></p>
                            <h2><?php the_title();  ?></h2>
                            <div class="banner_link hvr-shutter-out-horizontal">
                            	<a href="<?php echo $link=get_post_meta(get_the_ID(),"sliderlink",true)?>" target="_blank">2016 class schedule</a>
                            </div>
                          </div>
                                    
                 </li>
                 <!--banner1 ends.....-->
                 
                 <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                
                
             </ul>
            <!--carousel ends here.......-->
        </section>
        <!--section.banner-area ends...-->
    
    <section class="hotspot-area">
    	<div class="container pad-0">
        	<div class="col-md-3 col-sm-3">
            	<a href="<?php echo of_get_option('hl1','no entry');?>"><div class="single-hotspot">
                    <div class="hotspot-img">
                    	<img src="<?php echo of_get_option('hi1','no entry');?>" alt="">	
                    </div>
                    <!--hotspot-img ends...-->
                    
                    <div class="hotspot-content">
                    	<h3><?php echo of_get_option('h1','no entry');?></h3>
                        <p><?php echo of_get_option('hc1','no entry');?></p>		
                        <div class="read-more">
                    		<a href="<?php echo of_get_option('hl1','no entry');?>"><span>[</span>&nbsp;Read More&nbsp;<span>]</span></a>
                    	</div>	
                        <!--read-more ends...-->		
                    </div>
                    <!--hotspot-content ends...-->
                </div>	
                <!--single-hotspot ends...--></a>
            </div>	
            <!--col-md-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<a href="<?php echo of_get_option('hl2','no entry');?>"><div class="single-hotspot">
                    <div class="hotspot-img">
                    	<img src="<?php echo of_get_option('hi2','no entry');?>" alt="">	
                    </div>
                    <!--hotspot-img ends...-->
                    
                    <div class="hotspot-content">
                    	<h3><?php echo of_get_option('h2','no entry');?></h3>
                        <p><?php echo of_get_option('hc2','no entry');?></p>		
                        <div class="read-more">
                    		<a href="<?php echo of_get_option('hl2','no entry');?>"><span>[</span>&nbsp;Read More&nbsp;<span>]</span></a>
                    	</div>	
                        <!--read-more ends...-->		
                    </div>
                    <!--hotspot-content ends...-->
                </div>	</a>
                <!--single-hotspot ends...-->
            </div>	
            <!--col-md-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<a href="<?php echo of_get_option('hl3','no entry');?>"><div class="single-hotspot">
                    <div class="hotspot-img">
                    	<img src="<?php echo of_get_option('hi3','no entry');?>" alt="">	
                    </div>
                    <!--hotspot-img ends...-->
                    
                    <div class="hotspot-content">
                    	<h3><?php echo of_get_option('h3','no entry');?></h3>
                        <p><?php echo of_get_option('hc3','no entry');?></p>		
                        <div class="read-more">
                    		<a href="<?php echo of_get_option('hl3','no entry');?>"><span>[</span>&nbsp;Read More&nbsp;<span>]</span></a>
                    	</div>	
                        <!--read-more ends...-->		
                    </div>
                    <!--hotspot-content ends...-->
                </div></a>	
                <!--single-hotspot ends...-->
            </div>	
            <!--col-md-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<a href="<?php echo of_get_option('hl4','no entry');?>"><div class="single-hotspot">
                    <div class="hotspot-img">
                    	<img src="<?php echo of_get_option('hi4','no entry');?>" alt="">	
                    </div>
                    <!--hotspot-img ends...-->
                    
                    <div class="hotspot-content">
                    	<h3><?php echo of_get_option('h4','no entry');?></h3>
                        <p><?php echo of_get_option('hc4','no entry');?></p>		
                        <div class="read-more">
                    		<a href="<?php echo of_get_option('hl4','no entry');?>"><span>[</span>&nbsp;Read More&nbsp;<span>]</span></a>
                    	</div>	
                        <!--read-more ends...-->		
                    </div>
                    <!--hotspot-content ends...-->
                </div></a>	
                <!--single-hotspot ends...-->
            </div>	
            <!--col-md-3 ends...-->
        </div>
        <!--container ends...-->	
    </section>
    <!--banner-bottom ends...-->
    
    
    <section class="video-area">
    	<div class="container">
        	<div class="col-md-6 col-sm-6">
            	<div class="single-video-left">
                	<?php echo of_get_option('video-content','no entry');?>
                </div>
                <!--single-video-left ends...-->	
            </div>	
            <!--col-md-6 ends...-->
            <div class="col-md-6 col-sm-6">
            	<div class="single-video-right">
                	<!--<img src="images/video.jpg" alt="">-->
                    <?php echo of_get_option('video','no entry');?>
                </div>
                <!--single-video-right ends...-->	
            </div>	
            <!--col-md-6 ends...-->
        </div>	
    </section>
    <!--video-area ends....-->
    
    <section class="testimonial">
    	<div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="heading2">
                        <h1><span class="purple">[</span><span class="middle">Testimonial</span><span class="purple">]</span></h1>	
                </div>
                <!--heading ends....-->	
            </div>
            <!--col-md-10 ends.....-->
            <div class="testimonial-inner">
                <ul class="bxslider2">
                	<?php
					$args = array(
					'post_type' => 'testi',
					  'orderby' => 'name',
					  'order' => 'DESC',
					  'posts_per_page' => 3		
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
                            <div class="border">
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
            <!--testimonial-inner ends....-->
        </div>
        <!--container ends.....-->
    </section>
    <!--testimonial ends...-->
                
<?php get_footer(); ?>   