<?php
/**
 * Header elements.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'blogcoder_construct_header' ) ) {
	add_action( 'blogcoder_header', 'blogcoder_construct_header' );
	/**
	 * Build the header.
	 *
	 */
	function blogcoder_construct_header() {
        echo "Working";
      ?>
      <header id="blc_header" class="col-md-12">

      </header>
      <?php  
    }

}