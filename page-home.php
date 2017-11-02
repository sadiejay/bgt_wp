<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- video-->
<section class="video wrapper__video">
  <video muted preload autoplay loop>
    <source src="<?php bloginfo('template_url'); ?>/video/takeoff.mp4"  type="video/mp4"; codecs="avc1.42E01E, mp4a.40.2">
    <source src="<?php bloginfo('template_url'); ?>/video/takeoff.webm" type='video/webm'; codecs="vp8, vorbis">
    <source src="<?php bloginfo('template_url'); ?>/video/takeoff.ogv"  type='video/ogg'; codecs="theora, vorbis">

        <p>Your browser doesn't support HTML5 video. Here is a <a href="videos/takeoff.webm">link to the video</a> instead.</p>
   </video>
</section><!-- video -->

<!-- banner ad -->
<section class="banner__ad">

  <div class="banner__text">
    <h2>Booking for Bella Italia 2017</h2>
  </div>

  <button class="button button__join">join now</button>

</section><!-- banner__ad -->


<!-- tours-->

 <section class="tours">

   <div class="tour__i tour__individ1">
    <div class="tours__img">

    <img src="<?php bloginfo('template_url'); ?>/img/holiday_tour.jpg">

  </div><!-- tours img-->
  <div class="tours--hover">


    <p>Text on hover</p>

  </div><!-- tours hover -->
  </div><!-- tours individ1 -->

   <div class="tour__i tour__individ2">
    <div class="tours__img">

    <img src="img/rome_tour.jpg">

  </div><!-- tours img-->
  <div class="tours--hover">


    <p>Text on hover</p>

  </div><!-- tours hover -->
  </div><!-- tours individ2 -->

   <button class="button button__join">join us</button>
</section><!-- tours -->


<!-- about -->

<section class="about">
  <!-- about img -->
  <div class="about__img">

    <img src="img/founder.jpg" alt="Fleacé Weaver-bgt founder">

  </div><!-- about img-->

  <div class="about__text">

    <h2>about</h2>
    <p>Cupcake ipsum dolor sit amet liquorice cake gingerbread powder. Pudding topping croissant halvah. Chocolate marzipan biscuit gummies tart I love. Pie cookie chocolate oat cake lemon drops cake jelly. Sesame snaps I love marshmallow oat cake fruitcake marshmallow marshmallow cotton candy toffee. Pastry biscuit lemon drops sugar plum toffee carrot cake. Candy canes chocolate sweet topping I love macaroon I love. Muffin chocolate cake caramels carrot cake bear claw chocolate croissant I love. Donut fruitcake wafer dragée dessert marzipan. Halvah I love apple pie powder.</p>

  </div><!-- about text -->


</section><!-- about-->



<!-- blog -->

<section class="blog">
  <h2>Blog</h2>


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



<!-- contact -->
<section class="contact">

  <form id="contact" action="" method="post">

<h2>contact us</h2>
<p>intersted in becoming a flygirl? shoot us a message and we'll set your path straight within 48 hours!</p>

<fieldset>
  <input class="input__name"  placeholder="Name" type="text" tabindex="0" required>
</fieldset>

<fieldset>
  <input class="input__email"  placeholder="Email" type="text" tabindex="0" required>
</fieldset>

<fieldset>
  <input class="input__message" type="text" tabindex="0" required>
</fieldset>

<button name="button__contact" type="submit" id="button__contact" data-submit="... flying">contact</button>
<button name="button__clear" type="submit" id="button__clear" data-submit="... flying">clear</button>

</form>

</section><!-- contact -->


<?php get_footer(); ?>
