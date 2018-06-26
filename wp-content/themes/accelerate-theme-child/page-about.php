<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	
  <div id="primary" class="home-page hero-content about">

    <div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .site-content -->
  </div><!-- .home-page -->
<section class="services-list">
  <div class="about-services">
    <h5>Our Services</h5>
      <p>We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offered services.</p>
  </div>

<!-- remove permalinks if not creating single pages for posts -->
  <div id="primary" class="site-content">
    <div class="main-content" role="main">
      <?php query_posts('posts_per_page=4&post_type=services_offered'); ?>
      <?php while ( have_posts() ) : the_post();
        $icon = get_field("Icon");
      ?>

      <article class="services-offered clearfix">
        <div class="services-offered-images">
          
            <?php if($icon) {
              echo wp_get_attachment_image( $icon );
            } ?>
          
        </div>
        <aside class="services-offered-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
        </aside>

      </article>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
  </div><!-- #primary -->

</section>

<!-- CONTACT US LINK -->
 <section class="about-nav">
<nav id="navigation" class="container">
      <div>
<h2>Interested in working with us?<a class="button" style="margin-left: 50px" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></h2>
</div>
    </nav>
  </section>

<?php get_footer(); ?>
