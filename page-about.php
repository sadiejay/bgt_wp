<?php
/*
Template Name: About
*/
get_header(); ?>

<!-- about -->
<header class="header">

  <h1>about</h1>

</header>

<article class="about">
  <!-- about img -->
  <div class="about__img">

    <img src="img/founder.jpg" alt="Fleacé Weaver-bgt founder">

  </div><!-- about img-->

  <div class="about__text">

    <h2><?php the_field('subtitle');?></h2>
    <p>Cupcake ipsum dolor sit amet liquorice cake gingerbread powder. Pudding topping croissant halvah. Chocolate marzipan biscuit gummies tart I love. Pie cookie chocolate oat cake lemon drops cake jelly. Sesame snaps I love marshmallow oat cake fruitcake marshmallow marshmallow cotton candy toffee. Pastry biscuit lemon drops sugar plum toffee carrot cake. Candy canes chocolate sweet topping I love macaroon I love. Muffin chocolate cake caramels carrot cake bear claw chocolate croissant I love. Donut fruitcake wafer dragée dessert marzipan. Halvah I love apple pie powder.</p>

  </div><!-- about text -->


</article><!-- about-->

<article class="facts">

  <h2>facts</h2>
  <ul>
    <li class="fact1">
      Cupcake ipsum dolor sit amet candy. Pudding cotton candy lemon drops donut muffin cake dragée powder.
    </li>

    <li class="fact2">
      Liquorice bonbon lemon drops gummi bears sesame snaps ice cream pastry.
    </li>

    <li class="fact3">
      Cupcake ipsum dolor sit amet oat cake. Pastry toffee I love powder. Chupa chups jujubes chupa chups oat cake.
    </li>
  </ul>
</article><!-- facts -->

<article class="testimonial">

  <h2>testimonials</h2>
  <ul>
    <li class="quote1">
      Cupcake ipsum dolor sit amet candy canes I love. Bear claw marshmallow gummi bears. Apple pie powder marshmallow macaroon powder. Sweet I love lemon drops candy canes I love sugar plum I love. Tart topping caramels toffee soufflé icing jelly. Tart brownie donut jujubes oat cake cupcake.
    </li>

    <li class="quote2">
      Cupcake ipsum dolor sit. Amet I love cookie croissant bear claw wafer jelly beans marzipan dragée. Chocolate lollipop lemon drops soufflé toffee. Cookie gummi bears bear claw macaroon jelly beans.
    </li>
  </ul>
</article><!-- testimonial -->

<!-- contact -->
<article class="contact">

  <form id="contact" action="" method="post">

    <h2>contact us</h2>
    <p>Interested in becoming a flygirl? Shoot us a message, and we'll set your path straight within 48 hours!</p>

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

</article><!-- contact -->


<?php get_footer(); ?>
