<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <section class="about">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-title">About</h1>
        </div>
        <div class="col-xs-12 col-md-6">
          <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/profile-image.jpg" alt="profile-image">
        </div>

        <div class="col-xs-12 col-md-6">
          <p>Pete Madary, co-founder of the Detroit-based rock group DWARF, first performed live with the band as a pre-teen. For over a decade DWARF toured the Midwest and Canada in support of their critically acclaimed "power pop" records thrilling thousands of enthusiastic concert-goers. In pursuit of a major recording contract, the band relocated to Southern California where his ballad "Coming Down From Your Love" appeared on George Clinton's 1993 Testing Positive For The Funk album.</p>
          <p>Pete now enjoys performing his one-man acoustic classic rock act as his alter ego, Jethro BoDidley. Jethro will engage your clientele with his unique "Rod Stewart sings The Monkees" approach to the history of Rock and Roll.</p>
          <p>JBD's original recordings, timeless cover songs and humorous on-stage banter will keep your audience singing, dancing and laughing through the night.</p>
          <div class="col-xs-12 text-center">
            <button class="booknow-btn">book now</button>
          </div>
        </div>
      </div> <!-- End of row -->
    </div> <!-- End of container -->
  </section>
  <!-- /section -->

  <!-- section -->
  <section class="photos">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-title">Photos</h1>
        </div>
        <div class="col-xs-12 text-center">
          Gmedia code here
        </div>
      </div> <!-- End of row -->
    </div> <!-- End of container -->
  </section>
  <!-- /section -->

  <!-- section -->
  <section class="music">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-title">Music</h1>
        </div>
        <div class="col-xs-12 col-md-6">
          This is a collection of track recorded by Jethro BoDidley. Check back for newly added music.
        </div>

        <div class="col-xs-12 text-center">
          Gmedia code here
        </div>
      </div> <!-- End of row -->
    </div> <!-- End of container -->
  </section>
  <!-- /section -->

  <!-- section -->
  <section class="events">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-title">Events</h1>
        </div>
        <div class="col-xs-12 text-center">
          <h2>Here you can find our upcoming events</h2>
        </div>

        <div class="col-xs-12 text-center">
          Custom post type code here
        </div>

        <div class="col-xs-12 text-center">
          <h2>Book an event below</h2>
        </div>
      </div> <!-- End of row -->
    </div> <!-- End of container -->
  </section>
  <!-- /section -->

  <!-- section -->
  <section class="booking">
    <div class="container"> 
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-title">Booking</h1>
        </div>
        <div class="col-xs-12 text-center">
        <?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>
       </div>
     </div> <!-- End of row -->
   </div> <!-- End of container -->
 </section>
 <!-- /section -->
</main>

<?php get_footer(); ?>
