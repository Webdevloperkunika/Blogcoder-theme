<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="blc_body col-md-12">
	<?php
    /**
	 * blogcoder_header hook.
	 *
	 *
	 * @hooked blogcoder_construct_header
	 */
	do_action('blogcoder_header');
    ?>
