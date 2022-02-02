<?php get_header(); ?>

<section id="hero" style="background:url('<?php header_image() ?>') no-repeat center ;">

	<div class="row hero-content">


		<div class="twelve columns hero-container">
			<!-- hero-slider start-->
			<div id="hero-slider" class="flexslider">

				<ul class="slides">
					<?php
					$slider_loop = new WP_Query([
						'post__in' => get_option('sticky_posts'),
						'posts_per_page' => 4,
					]);

					if ($slider_loop->have_posts()) :
						while ($slider_loop->have_posts()) :
							$slider_loop->the_post();
					?>
							<li>
								<div class="flex-caption">
									<h1 class=""><?php the_title(); ?>
									</h1>

									<h3 class=""><?php the_excerpt(); ?></h3>
								</div>
							</li>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>

				</ul>

			</div> <!-- end hero-slider -->

		</div> <!-- end twelve columns-->

	</div> <!-- end row -->

	<div id="more">
		<a class="smoothscroll" href="#services"><?php echo __('More About Us','kreo') ?><i class="fa fa-angle-down"></i></a>
	</div>

</section> <!-- end homepage hero -->


<!-- portfolio
   ================================================== -->
<section id="portfolio">

	<div class="row section-head">

		<div class="twelve columns">

			<h1>Our Latest Projects<span>.</span></h1>

			<hr />

			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
			</p>

		</div>

	</div> <!-- end section-head -->

	<div class="row items">

		<!-- portfolio-wrapper -->
		<div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
			<?php

			$portfolio_loop = new WP_Query([
				'cat' => [1, 2, 3, 4, 5],
				'posts_per_page' => 8,
			]);

			if ($portfolio_loop->have_posts()) :
				$i = 0;
				while ($portfolio_loop->have_posts()) :
					$i++;
					$portfolio_loop->the_post();

			?>
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<a href="#modal-0<?= $i ?>">
								<?php the_post_thumbnail('large') ?>

								<div class="overlay"></div>
								<div class="portfolio-item-meta">
									<h5><?php the_title(); ?> </h5>
									<p><?php the_category(" , ") ?></p>
								</div>
								<div class="link-icon"><i class="fa fa-plus"></i></div>
							</a>
						</div>
					</div> <!-- item end -->

			<?php

				endwhile;
			endif;
			wp_reset_postdata();
			?>


		</div> <!-- end portfolio-wrapper -->


		<!-- modal popup
	   	========================================================= -->

		<?php

		$portfolio_loop_modal = new WP_Query([
			'cat' => [1, 2, 3, 4, 5],
			'posts_per_page' => 8,
		]);

		if ($portfolio_loop_modal->have_posts()) :
			$i = 0;
			while ($portfolio_loop_modal->have_posts()) :
				$i++;
				$portfolio_loop_modal->the_post();

		?>

				<div id="modal-0<?= $i ?>" class="popup-modal mfp-hide">

					<div class="media">
						<?php the_post_thumbnail() ?>
					</div>

					<div class="description-box">
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt() ?> </p>
						<span class="categories"><?php the_category(" , ") ?></span>
					</div>

					<div class="link-box group">
						<a href="<?php the_permalink() ?>">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>

				</div>
		<?php

			endwhile;
		endif;
		wp_reset_postdata();
		?>

	</div> <!-- end row -->

</section> <!-- end portfolio -->


<!-- Services Section
   ================================================== -->
<section id="services">

	<div class="row section-head">

		<div class="twelve columns">

			<h1>Our Awesome Services<span>.</span></h1>

			<hr />

			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
				voluptatem quia voluptas sit aspernatur aut odit aut fugit.
			</p>

		</div>

	</div> <!-- end section-head -->

	<div class="row mobile-no-padding">

		<div class="service-list bgrid-third s-bgrid-half tab-bgrid-whole group">

			<?php

			$services_loop = new WP_Query([
				'cat' => 9,
				'posts_per_page' => 6,
			]);

			if ($services_loop->have_posts()) :
				$i = 0;
				while ($services_loop->have_posts()) :
					$i++;
					$services_loop->the_post();

			?>


					<div class="bgrid">

						<h3><?php the_title(); ?> </h3>

						<div class="service-content">
							<p><?php the_excerpt(); ?></p>
							<p><a href="<?php the_permalink() ?>"><?php _e('Continue Reading ...','kreo')?></a></p>
						</div>

					</div> <!-- end bgrid -->
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>



		</div> <!-- end service-list -->

	</div> <!-- end row -->

</section> <!-- end services -->


<!-- About Section
   ================================================== -->
<section id="about">

	<div class="row section-head">

		<div class="twelve columns">

			<h1>Who Are We<span>.</span></h1>

			<hr />

			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
				voluptatem quia voluptas sit aspernatur aut odit aut fugit.
			</p>

		</div> <!-- end section-head -->

	</div>

	<div class="row mobile-no-padding">

		<div class="process bgrid-half tab-bgrid-whole group">

			<?php
			$about_loop = new WP_Query([
				'cat' => 10,
				'posts_per_page' => 4,
			]);

			if ($about_loop->have_posts()) :
				while ($about_loop->have_posts()) :
					$about_loop->the_post();
			?>


					<div class="bgrid">

						<h3><?php the_title(); ?> </h3>
						<p><?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink() ?>"><?php _e('Continue Reading ...','kreo')?></a></p>

					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>

		</div> <!-- end process -->

	</div> <!-- end row -->


	<div class="row team section-head">

		<div class="twelve columns">

			<h1>Meet Our Team<span>.</span></h1>

			<hr />

		</div>

	</div> <!-- end section-head -->

	<div class="row">

		<div id="team-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half mob-bgrid-whole group">

			<div class="bgrid member">

				<div class="member-pic">
					<img src="<?php echo get_theme_file_uri('assets/images/team/member01-k.jpg')?>" alt="" />
					<div class="mask"></div>
				</div>
				<div class="member-name">
					<h3>Naruto Uzumaki</h3>
					<span>Creative Director</span>
				</div>

				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
					nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

				<ul class="member-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li>
				</ul>

			</div> <!-- end member -->

			<div class="bgrid member">

				<div class="member-pic">
					<img src="<?php echo get_theme_file_uri('assets/images/team/member03-k.jpg')?>" alt="" />
					<div class="mask"></div>
				</div>
				<div class="member-name">
					<h3>Sasuke Uchiha</h3>
					<span>Lead Designer</span>
				</div>

				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
					nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

				<ul class="member-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li>
				</ul>

			</div> <!-- end member -->

			<div class="bgrid member">

				<div class="member-pic">
					<img src="<?php echo get_theme_file_uri('assets/images/team/member04-k.jpg')?>" alt="" />
					<div class="mask"></div>
				</div>
				<div class="member-name">
					<h3>Shikamaru Nara</h3>
					<span>Designer</span>
				</div>

				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
					nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

				<ul class="member-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li>
				</ul>

			</div> <!-- end member -->

			<div class="bgrid member">

				<div class="member-pic">
					<img src="<?php echo get_theme_file_uri('assets/images/team/member05-k.jpg')?>" alt="" />
					<div class="mask"></div>
				</div>
				<div class="member-name">
					<h3>Sakura Haruno</h3>
					<span>Designer</span>
				</div>

				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
					nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

				<ul class="member-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li>
				</ul>

			</div> <!-- end member -->

		</div> <!-- end team-wrapper -->

	</div> <!-- end row -->

	<div id="call-to-action">

		<div class="row section-ads">

			<div class="twelve columns">

				<h2><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost<span>.</span></a></h2>

				<p>
					Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
				</p>

				<div class="action">
					<a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
				</div>

			</div>

		</div> <!-- end section-ads -->

	</div> <!-- end call-to-action -->

</section> <!-- end about -->


<!-- Testimonials Section
   ================================================== -->
<section id="testimonials">

	<div class="row content flex-container">

		<div id="testimonial-slider" class="flexslider">

			<ul class="slides">
				<li>
					<p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
						to do what you believe is great work. And the only way to do great work is to love what you do.
						If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
					</p>

					<div class="testimonial-author">
						<img src="<?php echo get_theme_file_uri('assets/images/avatars/avatar-2.jpg')?>" alt="Author image">
						<div class="author-info">
							Steve Jobs
							<span class="position">CEO, Apple.</span>
						</div>
					</div>
				</li> <!-- end slide -->

				<li>
					<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
						nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					</p>
					<div class="testimonial-author">
						<img src="<?php echo get_theme_file_uri('assets/images/avatars/avatar-2.jpg')?>" alt="Author image">
						<div class="author-info">
							John Doe
							<span>CEO, ABC Corp.</span>
						</div>
					</div>
				</li> <!-- end slide -->

			</ul> <!-- end slides -->

		</div> <!-- end flexslider -->

	</div> <!-- end row -->

</section> <!-- end testimonials section -->


<!-- contact
   ================================================== -->
<section id="contact">

	<div class="row section-head">

		<!--<div class="twelve columns">

			<h1>Get In Touch With Us<span>.</span></h1>
			<hr />

		</div>-->

	</div> <!-- end section-head -->

	<div class="row">

		<div  class="six columns tab-whole left">
		<?php
			if(is_active_sidebar('kreo-footer-1')):
				dynamic_sidebar('kreo-footer-1');
			endif; ?>

		

		</div>

		<div class="six columns tab-whole right">
					
			<?php
			if(is_active_sidebar('kreo-footer-2')):
				dynamic_sidebar('kreo-footer-2');
			endif; ?>
			

		</div>

	</div> <!-- end row -->

</section> <!-- end contact -->

<?php get_footer(); ?>