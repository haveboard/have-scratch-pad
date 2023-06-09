<?php
if(!class_exists('Have_Scratch_Pad_Add_Menus'))
{
	class Have_Scratch_Pad_Add_Menus
	{
    	public function __construct(){
    	
			add_action( 'admin_menu', array($this,'have_scratc_pad_page_menu') );

    	}

		function have_scratc_pad_page_menu(){
				
			add_menu_page(
				'Scratch Pad',
				'Scratch Pad',
				'manage_options',
				'have-scratch-pad',
				array($this,'have_scratch_pad_page' ),
				'dashicons-edit'
			);	
		
		}
				
		function have_scratch_pad_page() {
		
			if ( !current_user_can( 'manage_options' ) )  {
			
				wp_die( __( 'Nope.' ) );
				
			}
			echo '<div class="wrap">';
				echo '<h1>Scratch Pad by haveboard</h1>';
				
				
			echo '<div class="wrap_inner">';
				echo '<p>Use this space to test code.</p>';
			
					//go to town here and write code to display in the admin
		
		
				echo '</div>';
		
			echo '</div>';
		}

	}
}
$have_scratch_pad_add_menus = new Have_Scratch_Pad_Add_Menus();
