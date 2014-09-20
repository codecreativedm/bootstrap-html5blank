<?php get_header(); ?>

	<main role="main">
        <div class="row">
    		<section class="col-sm-8 tag page-content">

                <h2><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h2>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!--// END TAG //-->

            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!--// END THE-SIDEBAR //-->
        </div>
        <!--// END ROW //-->
        
	</main>
    <!--// END CONTAINER //-->

<?php get_footer(); ?>
