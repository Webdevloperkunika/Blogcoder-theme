<?php
/** This is the main template file of Blogcoder Theme */ 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/** Getting Theme Header */
get_header();

?>

<!-- The Main container -->
<div id="primary" class="container">
    <div id="main" class="col-md-12">
    
    <div class="blc-left-container col-md-8">
    </div>
    <div class="blc-sidebar col-md-4">
    <?php get_sidebar(); ?>
    </div>

    </div>
</div>

<?php
/** Getting Theme Footer */
get_footer();
?>