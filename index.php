<?php get_header(); ?>

<!-- blog -->

<section class="blog">
	<h2>Blog Posts</h2>

<? ​php​​​ if​​​​ (​have_posts​())​​​​: ?>
	​​​​<? php while​​​​ (​have_posts​())​​​​:​​​
	the_post​();​​​​?>

	<article class=" blog__i blog__individual1">

		<div class="blog__thumb">
			<img src="img/vonnie.jpg" alt="Girl standing in front of a grafittied door">
		</div><!-- trip thumbnail-->

		<div class="blog__text">
			<p>Greece 2018</p>
		</div><!-- text-->

		<button class="button button__read"><a href="blog-single.html" target="_blank" rel="noopener">read more</a></button>

	</article><!--trip individual1-->

	<?​php​​ endwhile​;​​​ ?>
<?php endif​;​​​​?>


</section><!-- blog -->

<?php get_footer(); ?>
