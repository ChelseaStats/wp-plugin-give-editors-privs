<?php
/**
 * @package Editor extra privs
 * @author The Cellar Room Limited
 * @version 1.3.4
 */
/*
Plugin Name: Editor extra privs
Version: 1.0.0
Plugin URI: http://thecellarroom.uk
Author: The Cellar Room Limited
Author URI: http://thecellarroom.uk
Description: Allows editors privs to edit menus and widgets.
Copyright (c) 2015 by The Cellar Room Limited

*/

function tcr_core_give_edit_theme_options( $caps ) {
	
	/* check if the user has the edit_pages capability */
	if( ! empty( $caps[ 'edit_pages' ] ) ) {
		
		/* give the user the edit theme options capability */
		$caps[ 'edit_theme_options' ] = true;
		
	}
	
	/* return the modified capabilities */
	return $caps;
	
}

add_filter( 'user_has_cap', 'tcr_core_give_edit_theme_options' );
