<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();
?>

<div class="mast page-mast">
    <?php
    echo '<div class="mast page-mast">';
     echo '<img src="'. get_stylesheet_directory_uri() . '/img/SubpageOverlay.png" class="subpageoverlay" />';
     echo '<img src="'. get_stylesheet_directory_uri() . '/img/BlogSubPageBanner.jpg" class="Blog" width="100%"/>';
      echo '<div class="container mast-overlay">';
        echo '<h1>'.get_the_title().'</h1>';

      echo '</div>'; // End of mast-overlay container
    echo '</div>'; // End of page-mast container
    ?>
</div>

<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-12">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

    </div>

</div>

<?php
    get_footer();
