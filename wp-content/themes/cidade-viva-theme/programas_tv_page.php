<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
				<div class="artigo">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>			
<?php endwhile?>
<?php endif; ?>


