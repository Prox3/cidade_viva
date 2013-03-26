<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
	<div class="body_edition left">
  	<a href="<?php the_permalink() ?>">
			<span class="title_edition left"><?php the_title(); ?></span>
  		<?php the_post_thumbnail(); ?>
    </a>
  </div>
<?php endwhile?>
<?php endif; ?>


