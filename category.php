<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">
            <!-- section -->
            <section class="col-sm-12 category page-content">

                <h2><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h2>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!-- /section -->
            
            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!--// END THE-SIDEBAR //-->

        </div>
        <!--// END ROW //-->
        
    </main>

<?php get_footer(); ?>
