	<div id="footer">
		<div id="background-footer"></div>
        <div id="content">
        	<div class="left">
            	<div id="link-footer">
                    <div class="links-footer">
                        <?php
						  wp_nav_menu( array('menu' => 'Menu Footer 1', 'container' => ''));
					   	?> 
						<?php /*?><ul>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                        </ul><?php */?>
                    </div>
                    <div class="links-footer">
                        <?php
						  wp_nav_menu( array('menu' => 'Menu Footer 2', 'container' => ''));
						  echo('
								<script type="text/javascript">									
									$("#footer ul, #footer ul li, #footer ul li a").removeAttr("class").removeAttr("id");
									$.map($("#footer ul li a"), function(t,index){
										$(t).attr("class", "boldItalic11pt upperCase");
									});
								</script>
							');
					   	?> 
						<?php /*?><ul>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                            <li><a href="#" class="boldItalic11pt">Link 1</a></li>
                        </ul><?php */?>
                    </div>
                </div>
            </div>
        	<div class="right">
    	        <div id="contentAct">
            		<a href="http://actmob.com/" target="_blank">
                    	<img src="<?php bloginfo( 'template_url' ) ?>/images/actmob.png" alt="ActMob" />
	        	    </a>
        	    </div>
            </div>
        </div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>