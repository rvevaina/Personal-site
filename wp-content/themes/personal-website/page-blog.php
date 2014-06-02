<?php 

/*
Template Name: Blog Template
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>
  
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header class="major">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </header>

      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>

<?php else : ?>
  <!-- nothing found! -->
<?php endif; ?>
