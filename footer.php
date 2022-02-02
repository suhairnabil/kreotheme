
   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">  

      	<div class="twelve columns content group">
         <?php
			wp_nav_menu([
				'theme_location'=>'footer-social-menu',
				'menu_class'=>'social-links',
				//'menu_id'=>'nav',
			/*	'container'=>'ul',
				'container_class'=>'social-links',
				'container_id'=>'social-links',*/
				
			]);
			?>

			
            <hr />

            <div class="info">

            	<div class="footer-logo"></div>

	            <?php 
				if(is_active_sidebar('kreo-footer-3')):
				dynamic_sidebar('kreo-footer-3');

				else:
					?>
				<p>this is from theme not widget . This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
				<?php	
				endif;
				?>	        

	         </div>

      	</div>           

         <ul class="copyright">
         	<li>&copy; <?php printf (__('Copyright %s %s.','kreo'), bloginfo('title') , date('Y') )?></li> 
         	<li>Design by <a href="http://www.styleshout.com/">Styleshout.</a>.</li>
         </ul>

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#main_page"><?php echo __('Back to Top','kreo')?><i class="fa fa-angle-up"></i></a>
         </div>

      </div> <!-- end row -->

   </footer> <!-- end footer -->

 <!--  <div id="preloader"> 
    	<div id="loader"></div>
   </div> -->

   <?php wp_footer(); ?>
  <!-- <script src="<?=get_theme_file_uri('assets/js/jquery-1.11.3.min.js')?>"></script>-->
   

</body>

</html>