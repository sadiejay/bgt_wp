<?php get_header(); ?>


<?php if(have_posts()): while(have_posts()): the_post();?>
<!-- header-->
<header class="header">
	<div class="header__text">
		<?php the_title(); ?>>
	</div>
	<div class="header__hero">
		<?php the_post_thumbnail(); ?>
	</div>
</header><!-- header -->

<!-- blog content -->
<article class="article">

	<section class="article__author">
		<?php the_author(); ?>
	</section><!-- author  -->

	<section class="article__text">
		<?php the_content(); ?>

	</section><!-- text-->

	<section class="about__author">

		<div class="about__photo">

			<img src="#">

		</div> <!-- about photo -->

		<div class="about__text">

			<p>I love bonbon macaroon halvah danish apple pie carrot cake.</p>

		</div> <!-- about text -->


	</section><!--  about author -->

</article><!-- content__text -->


<!-- contact -->
<section class="contact">

	<form id="contact" action="" method="post">

		<h2>comment</h2>

		<fieldset>
			<input class="input__message" type="text" tabindex="0" required>
		</fieldset>

		<fieldset>
			<input class="input__name"  placeholder="Name" type="text" tabindex="0" required>
		</fieldset>

		<fieldset>
			<input class="input__email"  placeholder="Email" type="text" tabindex="0" required>
		</fieldset>

		<button name="button__contact" type="submit" id="button__contact" data-submit="... flying">contact</button>
		<button name="button__clear" type="submit" id="button__clear" data-submit="... flying">clear</button>

	</form>

</section><!-- contact -->

<?php get_sidebar(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
