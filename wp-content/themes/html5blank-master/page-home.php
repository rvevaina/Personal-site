<?php 
/*
Template Name: Home Page
*/
get_header() ?>



<main role="main">
	<!-- section -->
	<section>
	
   
  <div class="headwrap full-height" id="home"> 
  	<div class="headwrapContainer full-height">		  
		<div class="head">
			<h1>RAYHAN VEVAINA</h1>
			<h2>Front-End Web Developer</h2>	
	    </div>
    </div> 
  </div>
  
  <div class="main">
  
   
 
 <?php $allpages = new WP_Query(
 	array (
 		// "page_id" => 50
 		"posts_per_page" => -1,
 		"post_type" => 'page',
 		"order" => 'ASC',
 		"orderby" => "menu_order", 
 		"post__not_in" =>array(17,2,7),
 		 )
 	); ?>

   
	<?php if ($allpages->have_posts()): while ($allpages->have_posts()) : $allpages->the_post(); ?>

		<!-- article -->
		<div id="about" class="clearfix">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="box">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/cover.png" alt=""> -->
		</div>
		
		<h2><?php the_title(); ?></h2>


			<?php the_content(); ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>

		</div>
		<!-- /article -->


   <?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<div id="skills" class="clearfix"> 
   		<h2><span>SKILLS</span></h2>
   	  	<div class="skillscontainer">	
	   	  	<div class="front-end">
	   	  		<img src="<?php echo get_template_directory_uri(); ?>/img/front end.png" alt="">
				
				<ul>
					<h3>Front-end development</h3>
					<li>HTML5 & CSS3</li>
					<li>Javascript</li>
					<li>J-Query</li>
				</ul>
				
			</div>

			<div class="design">
				<img src="<?php echo get_template_directory_uri(); ?>/img/responsive1.png" alt="">
	          
				<ul>
					<h3>Responsive Design</h3>
					<li>Cross browser compatibility</li>
					<li>WordPress CMS Design</li>
					<li>User Experience</li>
				</ul>
			</div>

			<div class="writing">
				<img src="<?php echo get_template_directory_uri(); ?>/img/writing.png" alt="">
								
				<ul>
					<h3>Copywriting</h3>
					<li>Proofreading and editing</li>
					<li>Managing content</li>
					<li>Website copy</li>
				</ul>
			</div>

   	  </div>
   </div>

	</section>
	<!-- /section -->
	

<?php $portfolio = new WP_Query(
 	array (
 		"post_type" => 'portfolio',
 		"order" => 'ascending',
 		"orderby" => "menu_order", 
 		 )
 	); ?>

   
	<?php if ($portfolio->have_posts()): while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

		<!-- article -->
				<h2><?php the_title(); ?></h2>


			<?php the_content(); ?>

			<br class="clear">
			
			<!-- styling the thumbnail image - ask instructor-->
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
			<?php the_post_thumbnail('medium'); ?></a>


		</div>
		<!-- /article -->


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

	

</main>
   
 
<?php get_footer(); ?>

</div> <!-- End of div class 'main' -->