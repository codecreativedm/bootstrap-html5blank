<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">
            
            <section class="col-sm-8 post-404 page-content">
                <article>
                    <h2><?php _e( 'Page not found', 'html5blank' ); ?></h2>
                    <p><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a></p>
                </article>
            </section>
            <!--// END 404 //-->

            <aside id="the-sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!--// END THE-SIDEBAR //-->
            
        </div>
        <!--// END ROW //-->
    </main>
    <!--// END CONTAINER //-->

<?php get_footer(); ?>
