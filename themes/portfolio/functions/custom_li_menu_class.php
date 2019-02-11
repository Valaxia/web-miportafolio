<?php

function dl_custom_li_menu_class( $classes, $item, $args ) {
	$elem = $classes[0];
 
    if ( $item->type_label === 'Enlace personalizado' ) {
        $classes = $classes[0];
    }

    return $classes;
}


function register_my_menu() {
 register_nav_menu( "new-menu",__( "menu interior" ));
}
add_action( "init", "register_my_menu" );

