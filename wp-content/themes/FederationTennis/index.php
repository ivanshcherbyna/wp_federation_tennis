<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <div class="container">
                <h1><?php _e( 'Latest Posts', 'teatrhotel' ); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
