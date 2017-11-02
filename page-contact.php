<?php
/*
Template Name: Contact
*/
get_header(); ?>

<!-- contact -->
<section class="contact">

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

</section><!-- contact -->

<?php get_footer(); ?>
