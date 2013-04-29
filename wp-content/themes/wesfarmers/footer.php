
        <footer>
            <div class="wrapper">
                <p id="legalInfo">&copy; 2013 Wesfarmers Insurance.</p>
<?php 
$defaults = array(
	'theme_location'  => '',
	'menu'            => 'Footer',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu($defaults); ?>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/jquery.min.js"%3E%3C/script%3E'))</script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/min/?g=js" type="text/javascript" charset="utf-8"></script>        
    </body>
    
</html>