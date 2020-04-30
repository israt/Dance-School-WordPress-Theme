 <section class="registration-area">

    	<div class="container pad-0">

        	<div class="col-md-4 col-sm-4">

            	<div class="single-reg-left hvr-sweep-to-right">

                	<a href="<?php echo of_get_option('p-link1','no entry');?>" target="_blank">Online Registration (Children)</a>	

                </div>

                <!--single-reg-left ends...-->	

            </div>	

            <!--col-md-4 ends...-->

            

            <div class="col-md-4 col-sm-4">

            	<div class="single-reg-left hvr-sweep-to-right">

                	<a href="<?php echo of_get_option('p-link2','no entry');?>" target="_blank">Online Registration (Adults)</a>	

                </div>

                <!--single-reg-left ends...-->	

            </div>	

            <!--col-md-4 ends...-->

            

            <div class="col-md-4 col-sm-4">

            	<div class="single-reg-left hvr-sweep-to-right">

                	<a href="<?php echo of_get_option('p-link3','no entry');?>" target="_blank">TDC Dance Shop</a>	

                </div>

                <!--single-reg-left ends...-->	

            </div>	

            <!--col-md-4 ends...-->

        </div>	

    </section>

    <!--registration-area ends....-->

    

    <!--footer starts.................-->

        <footer>

            	<div class="container pad-0">

                	<div class="col-md-3 col-sm-3">

                    	<div class="single-list">

                        	<div class="single-list-title">

                            	<h3>Contact Us</h3>

                                <hr>

                            </div>

                            <!--single-list-title ends....-->

                            

                            <div class="single-list-content">

                            	<div class="address">

                                    <i class="fa fa-map-marker"></i>

                                    <?php echo of_get_option('c1','no entry');?>

                                </div>

                                <!--address ends.....-->

                                

                                <div class="phone-num">

                                    <i class="fa fa-mobile"></i>

                                    <ul>

                                    	<li><?php echo of_get_option('phn','no entry');?></li>

                                    </ul>

                                </div>

                                <!--phone-num ends.....-->

                                

                                <div class="mail">

                                    <i class="fa fa-envelope"></i>

                                    <ul>

                                    	<li><?php echo of_get_option('em-f','no entry');?></li>

                                    </ul>

                                </div>

                                <!--mail ends.....-->

                            </div>

                            <!--single-list-content ends....-->

                        </div>

                        <!--single-list ends....-->

                    </div>

                    <!--col-md-3 ends....-->

                    

                    

                    <div class="col-md-3 col-sm-3">

                    	<div class="single-list">

                        	<div class="single-list-title">

                            	<h3>Class Dance Styles</h3>

                                <hr>

                            </div>

                            <!--single-list-title ends....-->

                            

                            <div class="single-list-content">

                            	<div class="quick-link">

                                	<?php dynamic_sidebar("sidebar-1")?>

                                </div>

                                <!--quick-link ends....-->

                            </div>

                            <!--single-list-content ends....-->

                        </div>

                        <!--single-list ends....-->

                    </div>

                    <!--col-md-3 ends....-->

                    

                    

                    <div class="col-md-3 col-sm-3">

                    	<div class="single-list">

                        	<div class="single-list-title">

                            	<h3>Quick Links</h3>

                                <hr>

                            </div>

                            <!--single-list-title ends....-->

                            

                            <div class="single-list-content">

                            	<div class="services-link">

                                	<?php dynamic_sidebar("sidebar-2")?>

                                </div>

                                <!--quick-link ends....-->

                            </div>

                            <!--single-list-content ends....-->

                        </div>

                        <!--single-list ends....-->

                    </div>

                    <!--col-md-3 ends....-->

                    

                    <div class="col-md-3 col-sm-3">

                    	<div class="single-list">

                        	<div class="single-list-title">

                            	<h3>Follow Us on:</h3>

                                <hr>

                            </div>

                            <!--single-list-title ends....-->

                            

                            <div class="single-list-content">

                            	<div class="follow-link">

                                	<ul>

                                		<li>

                                        	<a href="<?php echo of_get_option('fb','no entry');?>" target="_blank"><i class="fa fa-facebook"></i></a>

                                        </li>

                                        <li>

                                        	<a href="<?php echo of_get_option('ins','no entry');?>" target="_blank"><i class="fa fa-instagram"></i></a>

                                        </li>

                                        <li>

                                        	<a href="<?php echo of_get_option('lin','no entry');?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                        </li>

                                        <!--<li>

                                        	<a href="<?php echo of_get_option('mail2','no entry');?>"><i class="fa fa-envelope"></i></a>

                                        </li>

                                        <li>

                                        	<a href="<?php echo of_get_option('gog','no entry');?>"><i class="fa fa-google-plus"></i></a>

                                        </li>-->

                                	</ul>

                                    <p><?php echo of_get_option('copyright_ftext','no entry');?></p>				

									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fl-logo.png" alt="">

                                </div>

                                <!--quick-link ends....-->

                            </div>

                            <!--single-list-content ends....-->

                        </div>

                        <!--single-list ends....-->

                    </div>

                    <!--col-md-3 ends....-->

                </div>

                <!--container ends.......-->

        </footer>

        <!--footer starts.................-->



    

<!-- **** JS(Java Script) FILES****** --> 

<!-- Lib -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>

<!-- BOOTSTRAP js -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

<!-- sc menu js -->

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sc-menu.js"></script>

<!-- bx JS -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>

<script type="text/javascript">



	$(document).ready(function(){

      $('.bxslider').bxSlider();

	  $('.bxslider1').bxSlider();

	  $('.bxslider2').bxSlider();

	});



</script>



<!--fancybox js-->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.js"></script>

<script type="text/javascript">

		$(document).ready(function() {

			

			$('.fancybox').fancybox();



		});

</script>



<?php wp_footer(); ?>

</body>

</html>



