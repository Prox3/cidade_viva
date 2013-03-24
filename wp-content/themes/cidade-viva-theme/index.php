<?php get_header(); ?>
	<div id="conteudo">
    	<div id="destaques">
        	<div id="destaquePrin" class="left">
            <a href="#">
            	<div class="imgDestaquePrin">
                	<img src="<?php bloginfo( 'template_url' ) ?>/images/foto_entrevista.jpg" width="100%" height="100%"/>
                </div>
                <div class="tituloDestaque">
                	<p class="upperCase">PROGRAMA CIDADE VIVA INÉDITO DIA 00/00</p>
                </div>
            </a>
            </div>
            <div id="destaqueSegun" class="right">
            </div>
        </div>
		<?php /*?><div id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
					<p><?php the_content(); ?></p>
				</div>			
			<?php endwhile?>
				<div class="navegacao">
					<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
					<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
				</div>
			<?php else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>
			
		</div><?php */?>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>