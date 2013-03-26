<style type="text/css">
	.left{float:left !important} .right{float:right !important}
	
	.title_edition{width:100%; height:auto; font-family:Unbuntu; font-size:14px; color:#555555; font-style:italic}
	.title_edition:hover{text-decoration:underline}
	
	.body_edition img{width:150px; height:195px; float:left; display:block}
</style>
<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
	<div class="body_edition left">
  	<a href="<?php the_permalink() ?>" class="title_edition left"><?php the_title(); ?></a>
  	<?php the_post_thumbnail(); ?>
  </div>
<?php endwhile?>
<?php endif; ?>


