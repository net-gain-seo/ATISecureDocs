<?php
/*
* Template Name: Blog
*/
// BLOG HOME
    get_header();
?>

<?php

    echo '<div class="mast page-mast">';
     echo '<img src="'. get_stylesheet_directory_uri() . '/img/SubpageOverlay.png" class="subpageoverlay" />';
     echo '<img src="'. get_stylesheet_directory_uri() . '/img/BlogSubPageBanner.jpg" class="Blog" width="100%"/>';
      echo '<div class="container mast-overlay">';
        echo '<h1>Blog</h1>';

      echo '</div>'; // End of mast-overlay container
    echo '</div>'; // End of page-mast container
 ?>
<div class="container">
    <div class="row blog-content">
        <div class="col col-12 col-lg-12">

            <div class="blog-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php the_excerpt(); ?>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>

            <div class="next-prev">
                <div class="prev"><?php next_posts_link( '<i class="fa fa-angle-double-left"></i> Older posts' ); ?></div>
                <div class="next"><?php previous_posts_link( 'Newer posts <i class="fa fa-angle-double-right"></i>' ); ?></div>
            </div>

        </div>

    </div>
</div>
<?php
    get_footer();
