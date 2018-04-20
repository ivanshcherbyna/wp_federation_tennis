<?php get_header(); ?>

	<main role="main">
        <div class="container">
            <div class="row">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Результаты поиска по запросу ', THEME_OPT ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
            </div>
        </div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
