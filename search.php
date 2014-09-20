<?php get_header(); ?>

	<main role="main" class="container">
        <div class="row">

            <section class="col-sm-8 search page-content">

                <h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!--// END SEARCH //-->
            
        </div>
                    
        <aside id="the-sidebar" class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
        <!--// END THE-SIDEBAR //-->
	</main>

<?php get_footer(); ?>
