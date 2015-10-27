<?php 
function accelerate_social_menu() {
	if ( has_nav_menu( 'social' ) ) {
		wp_nav_menu(
			array(
				'theme_location' 	=> 'social',
				'container' 		=> 'div',
				'container_id' 		=> 'menu-social',
				'container_class'	=> 'menu-social',
				'menu_id' 			=> 'menu-social-items',
				'menu_class' 		=> 'menu-items',
				'depth' 			=> 1,
				'link_before' 		=> '<span class="no-display">',
				'link_after' 		=> '</span>',
				'fallback_cb' 		=> ''
			)
		);
	}
}

?>