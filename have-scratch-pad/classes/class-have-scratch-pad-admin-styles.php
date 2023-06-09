<?php
if(!class_exists('Have_Scratch_Pad_Admin_Styles'))
{
	class Have_Scratch_Pad_Admin_Styles
	{
    	public function __construct(){
    	
			add_action('admin_enqueue_scripts', array(&$this, 'admin_style'));
			
    	} 
		
		// Update CSS within in Admin	
		function admin_style() {
		
			$screen = get_current_screen();
			if('toplevel_page_have-scratch-pad' === $screen->base){
			
				wp_enqueue_style('have-scratch-pad-admin-styles', plugins_url( '/c/style.css', dirname(__FILE__) ));
				
			}
		}
	}
}
$have_scratch_pad_admin_styles = new Have_Scratch_Pad_Admin_Styles();
