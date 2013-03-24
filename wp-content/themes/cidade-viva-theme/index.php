<?php get_header(); ?>
	<div id="conteudo">
    	<div id="page-content">
        <div id="destaques">
        	<?php
				$args = array( 'numberposts' => '3', 'orderby' => 'post_date' );
				$recent_posts = wp_get_recent_posts($args);
			?>
            <div id="destaquePrin" class="left">
            <a href="<?= get_permalink($recent_posts[0]["ID"]) ?>" title="Look <?= esc_attr($recent_posts[0]["post_title"])?> ">
	            <div class="playIconDest1"></div>
            	<div class="imgDestaquePrin">
                	<?php /*?><img src="<?php get_the_post_thumbnail($recent_posts[0]["ID"]) ?>" width="100%" height="100%"/><?php */?>
                    <?= get_the_post_thumbnail($recent_posts[0]["ID"]) ?>
                </div>
                <div class="tituloDestaque">
                	<p class="upperCase"><?= $recent_posts[0]["post_title"] ?></p>
                </div>
            </a>
            </div>
            <div id="destaqueSegun" class="right">
            	<div>
                    <a href="<?= get_permalink($recent_posts[1]["ID"]) ?>" title="Look <?= esc_attr($recent_posts[1]["post_title"])?> ">
                    <div class="playIconDest2"></div>
                    <div class="imgDestaquePrin">
                        <?= get_the_post_thumbnail($recent_posts[1]["ID"]) ?>
                    </div>
                    <div class="tituloDestaque">
                        <p class="upperCase"><?= $recent_posts[1]["post_title"] ?></p>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="<?= get_permalink($recent_posts[2]["ID"]) ?>" title="Look <?= esc_attr($recent_posts[2]["post_title"])?> ">
                    <div class="playIconDest2"></div>
                    <div class="imgDestaquePrin">
                        <?= get_the_post_thumbnail($recent_posts[2]["ID"]) ?>
                    </div>
                    <div class="tituloDestaque">
                        <p class="upperCase"><?= $recent_posts[2]["post_title"] ?></p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
			echo('
				<script>
				$("#destaques img").attr({ \'width\': \'100%\', \'height\':\'100%\' });
				</script>
			');
		?>
        <div id="programacao-completa">
        	<div class="icon-Programacao"></div>
            <div class="content-Programacao">
            <ul>
            	<li>
                	<a href="#">
                		<div class="box-Programacao" style="border-right:3px solid #000;">
                            <div class="centerVerticalAlign" style="border-right:0px;">
                                <p class="boldItalic11ptBlack">00:00</p>
                                <p class="boldItalic11ptBlack upperCase">no ar</p>
                            </div>
                            <div class="centerVerticalAlign">
                                <p class="italic11ptGray">Descricao</p>
                            </div>
                        </div>
    	            </a>
                </li>
                <li>
                	<a href="#">
                    	<div class="box-Programacao" style="border-right:3px solid #000;">
                            <div class="centerVerticalAlign" style="border-right:0px;">
                                <p class="boldItalic11ptBlack">00:00</p>
                                <p class="boldItalic11ptBlack upperCase">reprise</p>
                            </div>
                            <div class="centerVerticalAlign">
                                <p class="italic11ptGray">Descricao</p>
                            </div>
                        </div>
    	            </a>
                </li>
                <li>
                	<a href="#">
                    	<div class="box-Programacao">
                            <div class="centerVerticalAlign" style="border-right:0px;">
                                <p class="boldItalic11ptBlack">00:00</p>
                                <p class="boldItalic11ptBlack upperCase">reprise</p>
                            </div>
                            <div class="centerVerticalAlign">
                                <p class="italic11ptGray">Descricao</p>
                            </div>
                        </div>
    	            </a>
                </li>
            </ul>
            </div>
            <div class="list-Programacao">
            	<a href="#" class="centerVerticalAlign boldItalic11ptBlack">
                	programação completa
            	</a>
            </div>
        </div>
        
        <div id="extras-Programacao">
        	<ul>
            	<li>
                    <a href="#">
                        <div class="titulo-extras upperCase boldItalic11pt">revistas</div>
                        <div class="img-extras">
                            <div class="revistaIcon"></div>
                            <img src="<?php bloginfo( 'template_url' ) ?>/images/revista.jpg" width="100%" height="100%" />
                        </div>
                    </a>
                </li>
            	<li>
                    <a href="#">
                        <div class="titulo-extras upperCase boldItalic11pt">coluna no jornal</div>
                        <div class="img-extras">
                            <div class="jornalIcon"></div>
                            <img src="<?php bloginfo( 'template_url' ) ?>/images/jornal.jpg" width="100%" height="100%" />
                        </div>
                    </a>
                </li>
            	<li>
                <div style="display: inline-table;">
                        <div class="titulo-extras upperCase boldItalic11pt">novidades no blog</div>
					<a href="#">
                        <div class="img-extras-blog">
                            <img src="<?php bloginfo( 'template_url' ) ?>/images/blog1.jpg" width="100%" height="100%" />
                        </div>
                        <div>
                        <p class="upperCase boldItalic11ptBlack">
                        ACONTECEU NO PROGRAMA 
                        </p>
                        <p class="italic11ptGray">
                        Você fica sabendo de vários assuntos
                        </p>
                        </div>
                        <hr class="linhCinza" />
                    </a>
                    <a href="#">
                        <div class="img-extras-blog">
                            <img src="<?php bloginfo( 'template_url' ) ?>/images/blog2.jpg" width="100%" height="100%" />
                        </div>
                        <div>
                        <p class="upperCase boldItalic11ptBlack">
                        ACONTECEU NO PROGRAMA 
                        </p>
                        <p class="italic11ptGray">
                        Você fica sabendo de vários assuntos
                        </p>
                        </div>
						<hr class="linhCinza" />
                    </a>
                    </div>
                </li>
            </ul>
        </div>
        
        </div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>