<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package RickyVerona
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<br>
<br>
<br>
<br>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
