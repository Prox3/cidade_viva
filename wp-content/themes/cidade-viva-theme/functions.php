<?php
/* WIDGETS */
add_theme_support( 'post-thumbnails' );
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}

function loopPost($atts, $content = null) {
	extract(shortcode_atts(array(
		"pagination" => 'true',
		"query" => '',
		"category" => '',
	), $atts));
	global $wp_query,$paged,$post;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	if($pagination == 'true'){
		$query .= '&paged='.$paged;
	}
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}
	if(!empty($query)){
		$query .= $query;
	}
	$wp_query->query($query);
	ob_start();
	?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/blog.css" />
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <div class="artigo blog" style="margin-bottom:5px; width:710px;">
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <div class="infoBlog">
              <div class="calendar"></div>
              <div class="date">
                  <p style="text-transform:capitalize;"><?php the_time('d M, Y') ?></p>
              </div>
          </div>
          <div class="infoContent">
          	  <div>
              	<?php
              		if ( has_post_thumbnail() )
						the_post_thumbnail();
					echo('
					  <script type="text/javascript">
						  $(".infoContent img").removeAttr("width").removeAttr("height");
						  $.map($(".infoContent img"), function(t,index){
							  $(t).attr("width", "100%").attr("height","200");
						  });
					  </script>
					');
				?>
              </div>
              <div class="content">
                  <p><?php the_excerpt(); ?></p>
              </div>
              <div class="linkLeiaMais">
              <a href="<?php the_permalink() ?>">Leia Mais...</a>
              </div>
              <div class="footer">
                  <p>Postado por <?php the_author() ?></p>
              </div>
          </div>
          <hr style="border:0px; border-top: 1px solid #eee;" />
      </div>
	<?php endwhile; ?>
    
	<?php if(pagination == 'true'){ ?>
	<div class="navigation">
	  <div class="alignleft"><?php previous_posts_link('« Antigos') ?></div>
	  <div class="alignright"><?php next_posts_link('Próximos »') ?></div>
	</div>
	<?php } ?>
	<?php $wp_query = null; $wp_query = $temp;
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode("loopPost", "loopPost");

?>