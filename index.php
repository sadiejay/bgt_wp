<?php get_header(); ?>

<!-- blog -->

<section class="blog">
	<h1>Blog Posts</h1>

	<article class=" blog__i blog__individual1">

		<div class="blog__thumb">
			<?php the_post_thumbnail(); ?>
		</div><!-- trip thumbnail-->

		<div class="blog__date">
			<?php echo get_the_date(); ?>
		</div><!-- date-->

		<div class="blog__text">
			<?php the_title(); ?>
		</div><!-- text-->

		<button class="button button__read"><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener">read more</a></button>

	</article><!--trip individual1-->



</section><!-- blog -->

<?php get_footer(); ?>
