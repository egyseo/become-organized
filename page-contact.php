<?php

/* Template Name: Contact template */

get_header();
?>

<!-- FEATURE IMAGE
    ================================================== -->
<section class="feature-image contact">
  <h1><?php the_title(); ?></h1>
</section>

<div class="container">
  <div class="row" id="primary">

    <div class="col-sm-6" style="border-right: 1px solid #c0bfbf;">

      <p>Thank you for visiting!</p>
      <p>If you would like to discuss our services, schedule an appointment, receive a quote, or have any questions, please don’t hesitate to contact us.</p>
      <p>We are currently servicing New York, New Jersey, and surrounding areas. You may reach us by phone, email, or by filling out the form.</p>
        <div id="contact-info">
          <div style="margin: 40px 0;">
            <p style="text-align: center;"><i class="fas fa-envelope"></i> Email</p>
            <p style="text-align: center;">jessica@becomeorganized.net</p>
          </div>
        <p style="text-align: center;"><i class="fas fa-phone"></i> Phone</p>
        <p style="text-align: center;">703-581-4382</p>
        </div>
    </div>
  
    <div id="content" class="col-sm-6">
      
      <section class="main-content" style="padding: 5px 0;">
        
        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>
        
      </section><!-- main-content -->
          
    </div><!-- content -->
          
  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>

