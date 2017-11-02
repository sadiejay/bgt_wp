<?php
/*
Template Name: Tours
*/
get_header(); ?>

<header>

  <h1>tours</h1>

  <form class="search">

    <input type="text" placeholder="destination">
    <input type="text" placeholder="mm/dd">
    <input type="text" placeholder="mm/dd">
    <input type="button" value="join us">

  </form>

</header>



<!-- tours-->

 <section class="tours">

   <div class="tour__i tour__individ1">
    <div class="tours__img">

    <img src="img/holiday_tour.jpg">

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

   <button href="tours-single.html" target="_blank" rel="noopener" class="button button__join">join us</button>
</section><!-- tours -->

<?php get_footer(); ?>
