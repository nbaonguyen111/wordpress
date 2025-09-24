<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<footer id="colophon" class="site-footer" role="contentinfo" style="background-color:#007b5e; color:#ffffff; padding:60px 0; text-align:center;">

<!-- Site Logo -->
<div class="footer-logo" style="margin-bottom:30px;">
	<?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	} ?>
</div>

<!-- Social Icons -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="footer-social" style="margin-bottom:30px;">
	<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
	<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
	<a href="#" class="social-icon"><i class="fa fa-instagram"></i></a>
	<a href="#" class="social-icon"><i class="fa fa-google"></i></a>
	<a href="#" class="social-icon"><i class="fa fa-envelope"></i></a>
	<a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
</div>
<!-- /wp:group -->



<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"}} -->
    <?php if ($menu_id): ?>
        <!-- wp:navigation {"ref":<?php echo $menu_id; ?>,"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-evenly"}} /-->
    <?php endif; ?>
				<!-- /wp:navigation -->
				<?php
$menu_name = 'Footer Menu';
$menu = wp_get_nav_menu_object($menu_name);

if ($menu) {
    echo 'Menu ID: ' . $menu->term_id;
} else {
    echo 'Menu chưa tồn tại';
}
?>

			</div>
				<!-- /wp:group -->

<!-- Footer Text -->
<div class="footer-text">
	<p>© <?php echo date('Y'); ?> Your Website. All rights reserved.</p>
	<p>Privacy Policy | Terms of Service</p>
</div>

</footer>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
