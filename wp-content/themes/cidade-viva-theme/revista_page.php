
<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
	<div class="body_edition left">
  	<a href="<?php the_permalink() ?>" class="title_edition" style="width:100%; height:auto; font-family:Unbuntu; font-size:14px; color:#555555; font-style:italic">
			<?php the_title(); ?>
    </a>
  	<?php the_post_thumbnail(); ?>
  </div>
<?php endwhile?>
<?php endif; ?>


