<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php
echo '<div class="mast page-mast">';
 echo '<img src="'. get_stylesheet_directory_uri() . '/img/SubpageOverlay.png" class="subpageoverlay" />';
 echo '<img src="'. get_stylesheet_directory_uri() . '/img/BlogSubPageBanner.jpg" class="Blog" width="100%"/>';
  echo '<div class="container mast-overlay">';
    echo '<h1>400 Page Not Found</h1>';

  echo '</div>'; // End of mast-overlay container
echo '</div>'; // End of page-mast container
?>
<div class="container">
    <div class="row">
      <div class="col col-12 col-lg-9">
          <p>Oops, we’re sorry. We can’t find the page you’re looking for. </p>
          <p>The link you followed may be broken or the page may have been removed.</p>
          <p>Back to <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a></p>
			</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
