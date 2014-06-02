<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
		<h1><?php the_title(); ?></h1>	

			<?php the_content(); ?>

			 <h3><?php the_field('client_name'); ?></h3>
			 <p><?php the_field('short_description'); ?></p>

		<div class="portfolio-images">
			 <?php while( has_sub_field('images')): ?>
			 	  <div class="portfolio-image">
				 	  <p><?php the_sub_field('caption'); ?></p>
				 	  <?php $image = get_sub_field('image');?>
				 	  <pre>
				 	  <!-- 	<?php print_r($image); ?> -->
				 	  </pre>
				 	  <img src="<?php echo $image['sizes']['thumbnail']; ?>">
			 	  </div>
			<?php endwhile; ?>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>