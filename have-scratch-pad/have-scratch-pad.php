<?php
/**
 * Plugin Name: Have Scratch Pad
 * Plugin URI: 
 * Description: 
 * Version: 1
 * Author: Jonathan Finnegan
 * Author URI: http://jonathanfinnegan.com/
 *
 * MU Plugin to add to a site when I want to create a new Admin panel to use as a scratch pad to test code
 *
 */
 
if(!class_exists('Have_Scratch_Pad'))
{
	class Have_Scratch_Pad
	{	
		public function __construct()
		{
			
			//loop through directory to load classes
			$dir    = sprintf("%s/classes/", dirname(__FILE__));
			$include_classes = scandir($dir);
			$scanned_directory = array_diff(scandir($dir), array('..', '.','.DS_Store'));
			
			//	print_r($scanned_directory);
			if($scanned_directory){
				foreach($scanned_directory as $include_class){
					require_once(sprintf("%s/classes/".$include_class, dirname(__FILE__)));	
				}
			}	
		}
	}
}
$have_scratch_pad = new Have_Scratch_Pad();

