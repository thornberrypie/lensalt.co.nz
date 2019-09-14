<?php
/* Template Name: Home */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		$post = get_posts();
		foreach($posts as $post) { ?>
			<article class="post">
				<h2 class="post-title"><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a></h2>
				<h4 class="post-date"><?php echo get_the_date('d F Y', $post) ?></h4>
				<h3 class="post-excerpt"><?php echo $post->post_excerpt ?></h3>
				<a href="<?php echo get_permalink($post->ID) ?>">Read more</a>
			</article><?php
		} ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
