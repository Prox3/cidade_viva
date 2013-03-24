<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/footer.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/header.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/index.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/sidebar.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo( 'template_url' ) ?>/js/jquery.min.js" type="text/javascript"></script>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
<script>
function verificatexto(campo) {
	if (campo.value == "")
		campo.value = "BUSCA";
}
function limpacampo(campo) {
	if (campo.value == "BUSCA")
		campo.value = "";
}
</script>
</head>
<body>
<div id="corpo">
	<div id="header">
		<?php /*?><h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
		
		<ul id="nav">
			<?php wp_list_cats('sort_column=name'); ?>
		</ul><?php */?>
        <div id="header-logo">
            <div id="boxLogo" class="left">
            	<div>
            		<a href="<?php get_home_url(); ?>">
                    	<img src="<?php bloginfo( 'template_url' ) ?>/images/logo.png" alt="Cidade Viva" />
                    </a>
                </div>
            </div>
            <div id="boxBusca" class="left">
                <div id="busca">
                	<div id="redesSociais">
                    	<ul>
                        	<li><a href="#" class="facebook"></a></li>
                        	<li><a href="#" class="twitter"></a></li>
                        	<li><a href="#" class="plus"></a></li>
                        	<li><a href="#" class="instagram"></a></li>
                        </ul>
                    </div>
                    <div>
                        <form role="search" method="get" id="searchform" action="<?php get_home_url(); ?>">
                            <div>
                                <input type="text" value="BUSCA" name="s" id="s" onblur="verificatexto(this)" onfocus="limpacampo(this)">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="pub-Header">
                	<a href="#">
                    	<img src="<?php bloginfo( 'template_url' ) ?>/images/banner-header.png" />
	                </a>
                </div>
            </div>
        </div>
        
        <div id="header-menu">
			  <?php
                  wp_nav_menu( array('menu' => 'Menu Header', 'container' => ''));
               ?> 
        </div>
	</div>