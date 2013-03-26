<style type="text/css">
	.left{float:left !important} .right{float:right !important}
	
	.title_edition{width:100%; height:auto; font-family:Unbuntu; font-size:14px; color:#555555; font-style:italic; font-weight:bold}
	.title_edition:hover{text-decoration:underline}
	
	.body_edition img{width:150px; height:195px; float:left; display:block}
	.body_edition{margin-right:15px}
</style>
<?php if ( have_posts() ) : while ( have_posts() ) :  the_post();

$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

 ?>
	<div class="body_edition left">
  	<a href="<?php $post_thumbnail_url ?>" rel="lightbox[jornal]">
			<span class="title_edition left"><?php the_title(); ?></span>
  		<?php the_post_thumbnail(); ?>
    </a>
  </div>
<?php endwhile?>
<?php endif; ?>


