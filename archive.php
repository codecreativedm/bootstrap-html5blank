<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">

            <!-- section -->
            <section class="col-sm-8 archive page-content">

                <h2><?php _e( 'Archives', 'html5blank' ); ?></h2>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!-- /section -->
            
            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div>
		
    </main>

<?php get_footer(); ?>
