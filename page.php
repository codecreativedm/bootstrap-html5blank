<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">
            <section class="col-sm-8 page page-content">

                <h2><?php the_title(); ?></h2>

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                </article>
                <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, there is nothing to display at this time.', 'html5blank' ); ?></h2>

                </article>
                <!-- /article -->

                <?php endif; ?>

            </section>
            <!-- /section -->
            
            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!--// END THE-SIDEBAR //-->
            
        </div>
		<!--// END ROW //-->
	</main>
    <!--// END CONTAINER //-->



<?php get_footer(); ?>
