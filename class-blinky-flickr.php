<?php 

class Blinky_Flickr{

	function __construct() {
		add_action( 'init', array( $this, 'include_phlickr' ) );
	}

	public static function include_phlickr() {
		$path = plugin_dir_path( __FILE__ ) . 'lib/';
		set_include_path( get_include_path() . PATH_SEPARATOR . $path );
		require_once( 'Phlickr/Api.php' );
	}

}

new Blinky_Flickr;