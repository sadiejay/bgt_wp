<?php get_header(); ?>


<?php if(have_posts()): while(have_posts()): the_post();?>
<!-- header-->
<header class="header">
	<div class="header__text">
		<h1>Trip Report pt. 1</h1>
	</div>
	<div class="header__hero">
		<img src="img/blog3.jpg">
	</div>
</header><!-- header -->

<!-- blog content -->
<article class="article">

	<section class="article__author">
		<h2>by clarie</h2>
	</section><!-- author  -->

	<section class="article__text">
		<p>Fruitcake donut caramels biscuit sweet roll marshmallow chocolate bar. Gummies croissant macaroon ice cream cheesecake oat cake bonbon donut. Chocolate cake caramels croissant ice cream chocolate I love I love lollipop. I love jelly beans topping wafer oat cake. Sugar plum croissant dessert tootsie roll sweet roll sesame snaps. Liquorice sesame snaps gummies. Powder macaroon carrot cake apple pie jelly-o apple pie dessert.</p>

		<p>Lemon drops jelly beans jelly beans jelly beans toffee. I love sweet roll danish muffin cake cookie soufflé gummi bears. Donut liquorice liquorice gingerbread. Gingerbread cake donut jelly beans liquorice tart. Icing dragée I love. I love pastry topping ice cream tart. I love ice cream toffee muffin powder croissant fruitcake. Cupcake I love marshmallow toffee danish I love. Muffin jujubes sweet roll danish cookie chocolate cake macaroon dragée. Chocolate cake I love cake candy canes sesame snaps jelly lemon drops danish cake.</p>

		<p>I love marzipan cheesecake chocolate bar toffee wafer. Bonbon I love I love macaroon dessert apple pie croissant. Icing donut I love tart. Lemon drops tiramisu jelly beans I love danish marshmallow. Tart wafer cake pudding cake tootsie roll sugar plum toffee liquorice. Pie cookie halvah candy canes cheesecake macaroon brownie. Chocolate gummi bears donut apple pie jelly-o cotton candy liquorice. Marshmallow jelly beans lemon drops. Cookie soufflé biscuit croissant. Cookie jelly beans bonbon candy canes sugar plum topping carrot cake.</p>

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




<!-- more posts -->

<section class="blog">
	<h2>more posts</h2>


	<article class=" blog__i blog__individual1">

		<div class="blog__thumb">
			<img src="img/vonnie.jpg" alt="Girl standing in front of a grafittied door">
		</div><!-- trip thumbnail-->

		<div class="blog__text">
			<p>Greece 2018</p>
		</div><!-- text-->

		<button class="button button__read"><a href="blog-single.html" target="_blank" rel="noopener">read more</a></button>

	</article><!--trip individual1-->

	<article class="blog__i blog__individual2">

		<div class="blog__thumb">
			<img src="img/blog2.jpg"
			alt="standing in front of statue with italian carving">
		</div><!-- trip thumbnail-->

		<div class="blog__text">
			<p>Girls Gone Wild! South Africa 2018</p>
		</div><!-- text-->

		<button class="button button__read"><a href="blog-single.html" target="_blank" rel="noopener">read more</a></button>

	</article><!--trip individual2-->

	<article class="blog__i blog__individual3">

		<div class="blog__thumb">
			<img src="img/blog3.jpg" alt="posing in Bali">
		</div><!-- blog thumbnail-->

		<div class="blog__text">
			<p>Holibeach Party</p>
		</div><!-- text-->

		<button class="button button__read"><a href="blog-single.html" target="_blank" rel="noopener">read more</a></button>

	</article><!--blog individual3-->

</section><!-- blog -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
