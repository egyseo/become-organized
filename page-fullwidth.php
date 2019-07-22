<?php
/* Template Name: Full-width template */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

get_header();
?>

<!-- FEATURE IMAGE
  ================================================== -->

<?php if ( has_post_thumbnail() ) { ?>

<section class="feature-image feature-img-fix" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
  <h1><?php the_title(); ?></h1>
</section>

<?php } else { // Fallback image ?>

<section class="feature-image feature-image-default feature-img-fix" data-type="background" data-speed="2">
  <h1><?php the_title(); ?></h1>
</section>

<?php } ?>


<div class="container">
  <div class="row" id="primary">
  
    <div id="content" class="col-sm-12">
      
      <section class="main-content" style="padding: 40px 0;">
      
      <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
      
      </section><!-- main-content -->
        
    </div><!-- content -->
      
  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>

