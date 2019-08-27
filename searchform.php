<?php
/**
 * Template for displaying search forms in Gozareh
 *
 * @package WordPress
 * @subpackage Gozareh
 * @since 1.0
 * @version 1.0
 */

?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <input type="search" id="<?php echo 'search-form-'; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search &hellip;', 'gozareh' ); ?>"  value="<?php echo get_search_query(); ?>" name="s" /><button type="submit" class="search-submit"><i class="fas fa-search"></i></button>

</form>
