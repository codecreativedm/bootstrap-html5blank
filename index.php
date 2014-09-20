<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">
            
            <section class="col-sm-8 home page-content">

                <h2><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!--// END HOME PAGE CONTENT //-->
            
            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!--// END THE-SIDEBAR //-->

        </div>
        <!--// END ROW //-->
    </main>
    <!--// END CONTAINER //-->

<?php get_footer(); ?>
