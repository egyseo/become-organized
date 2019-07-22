<?php 
/*
  Template Name: Home Page
*/

 get_header(); ?>

  <!-- HERO
    ================================================================ -->
  <section id="hero">
    <article>
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-12 hero-text">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/BOLogoType_New_thick.png" alt="Become Organized" class="logo">

            <p class="lead slogan">Organizing the Small Spaces in Manhattan &amp; Beyond</p>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </article>
  </section>
  <!-- hero -->

  <section class="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead">
            <strong>Subscribe to our newsletter</strong> for more info and organizing tips.</p>
        </div><!-- col -->
        <div class="col-sm-4">
          <button class="btn cta-button btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to subscribe</button>
        </div>
      </div>
    </div>
  </section><!-- row -->

  <!-- HOW WE HELP
    ================================================================ -->
  <section id="how-we-help">
    <div class="container">

      <div class="section-header">
        <h1>How We Help</h1>

        <div class="row services">

          <div class="col-sm-2">
            <i class="ci ci-home"></i>
            <h4>Home Organizing</h4>
          </div>
          <!-- col -->

          <div class="col-sm-2">
            <i class="ci ci-truck"></i>
            <h4>Move Management</h4>
          </div>
          <!-- col -->

          <div class="col-sm-2">
            <i class="ci ci-desk"></i>
            <h4>Office Organizing</h4>
          </div>
          <!-- col -->

          <div class="col-sm-2">
            <i class="ci ci-folder"></i>
            <h4>Paper Organizing</h4>
          </div>
          <!-- col -->

          <div class="col-sm-2">
            <i class="ci ci-calendar"></i>
            <h4>Time Management</h4>
          </div>
          <!-- col -->

          <div class="col-sm-2">
            <i class="ci ci-hanger"></i>
            <h4>Closet Organizing</h4>
          </div>
          <!-- col -->

        </div>
        <!--row -->
      </div>
      <!-- section-header -->

    </div>
    <!-- container -->
  </section>
  <!-- how-we-help -->

  <section class="img-section1">

  </section>

  <section id="how-we-help2">
    <div class="container">
      <div class="row">
    
        <div class="col-sm-8 col-sm-offset-2 session">

          <?php
            $mypod = pods('how_we_help');
            $mypod->find('order_id ASC');
          ?>

          <?php while ( $mypod->fetch() ) : ?>
            <?php 
              $name= $mypod->field('name');
              $content= $mypod->field('content');
              $permalink= $mypod->field('permalink');
            ?>

            <h2><?php echo $name ?></h2>
            <p><?php echo $content ?></p>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- WHO WE ARE
    ================================================================ -->
  <section id="who-we-are">
    <div class="container">

      <h1>Who We Are</h1>

      <div class="row">
          <?php
            $mypod = pods('who_we_are');
            $mypod->find('name ASC');
          ?>

          <?php while ( $mypod->fetch() ) : ?>
            <?php 
              $name= $mypod->field('name');
              $content= $mypod->field('content');
              $member_image= $mypod->field('member_image');
            ?>

            <div class="col-sm-4">
              <img src="<?php echo $member_image ?>">
              <h3><?php echo $name ?></h3>
              <p><?php echo $content ?></p>
            </div>
          <?php endwhile; ?>
        
      </div>
      <!-- row -->

    </div>
    <!-- container -->
  </section>
  <!-- who-we-are -->

  <section class="img-section2">

  </section>

  <!-- WHAT WE CHARGE
    ================================================================ -->
  <section id="what-we-charge">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h1>What We Charge</h1>
            </div>
            <!-- col -->
          </div>
          <!-- row -->

          <p class="lead">
            We work with various budgets and offer services ranging from organizational consulting and planning to whole home organizing and personal shopping. Let us customize a plan that works for you.
          </p>

        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!-- TESTIMONIALS
    ================================================================ -->

  <section id="testimonial" class="carousel slide testimonial_indicators testimonial_control_button thumb_scroll_x swipe_x"
    data-ride="carousel" data-pause="hover" data-interval="false" data-duration="2000">
    <div class="testimonial_header">
      <h1>Why People Love Us</h1>
    </div>
    
    <ol class="carousel-indicators">
      <?php 
      $args = array( 
        'post_type' => 'slider',
        'orderby'   => 'menu_order title',
        'order'     => 'ASC',
      );
      $query = new WP_Query( $args );
      ?>
      <?php if($query->have_posts()) : ?>
        <?php $count = 0; ?>
        <?php while($query->have_posts()) : $query->the_post() ?>
          <li data-target="#testimonial" data-slide-to="<?php echo $count; ?>" class="<?php if($count==0): ?>active<?php endif; ?>"></li>
          <?php $count++; ?>
        <?php endwhile ?>
      <?php endif ?>
      <?php wp_reset_postdata(); ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php 
      $args = array( 
        'post_type' => 'slider',
        'orderby'   => 'menu_order title',
        'order'     => 'ASC',
      );
      $query = new WP_Query( $args );
      ?>
      <?php if($query->have_posts()) : ?>
        <?php $count = 0; ?>
        <?php while($query->have_posts()) : $query->the_post() ?>
          <div class="item <?php if($count === 0): ?>active<?php endif; ?>">
            <div class="testimonial_slide">
              <p><?php the_content(); ?></p>
              <h4><?php the_title(); ?></h4>
            </div>
          </div>
          <?php $count++; ?>
        <?php endwhile ?>
      <?php endif ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <a class="left carousel-control" href="#testimonial" role="button" data-slide="prev">
      <span class="fa fa-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#testimonial" role="button" data-slide="next">
      <span class="fa fa-chevron-right"></span>
    </a>
  </section>

<?php get_footer(); ?>