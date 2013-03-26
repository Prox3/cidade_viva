<style type="text/css">
	.left{float:left !important} .right{float:right !important}
	
	.title_post{width:100%; height:auto; font-family:Unbuntu; font-size:22px; color:#555555; font-weight:bold}
	.title_edition:hover{text-decoration:underline}
	
	.info_date_post{width:100%; height:auto; font-family:Unbuntu; font-size:12px; color:#555555; font-style:italic; margin:5px 0 5px 0}
	
	.body_edition img{width:150px; height:195px; float:left; display:block}
	.body_edition{margin-right:15px}
</style>
<?php get_header(); ?>
	<div id="conteudo">
		<div id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<span class="title_post left"><?php the_title(); ?></span>
					<span class="info_date_post left">Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
          <span class='st_facebook_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_twitter_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_email_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='email'></span><span class='st_sharethis_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='sharethis'></span><span class='st_fblike_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='fblike'></span><span class='st_plusone_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_pinterest_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='pinterest'></span><span class='st_instagram_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='instagram'></span>
					<p><?php the_content(); ?></p>
				</div>
				
				<?php comments_template(); ?>
					
			<?php endwhile; else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>
			
		</div>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>