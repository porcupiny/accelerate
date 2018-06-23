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
	<div id="primary" class="home-page hero-content">

		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .site-content -->
	</div><!-- .home-page -->
<!-- ABOUT -->
  <section class="about-content">
    <div class="header-content">
      <h4>Our Services</h4>
      <p>We take pride in our clients and the content we create for them. Here&#039;s a brief overview of our offered services.</p>
    </div>

<div class="about-line">
<div class="content"></div>
<div class="about-text" id="about-1-content"><h2 class="about">  Content Strategy</h2>
<p class="bacon">Bacon ipsum dolor amet jerky capicola meatloaf salami cow tenderloin short ribs pig ribeye pork loin landjaeger prosciutto andouille kielbasa.</p></div></div>
<div  class="about-line">
<div class="about-text about-text-even" id="about-2-content">
<h2 class="about">  Influencer Mapping</h2>
<p class="bacon">Bacon ipsum dolor amet elit exercitation landjaeger eiusmod laborum ut. Shank ut in voluptate ham ipsum magna in jowl prosciutto ex tri-tip labore t-bone rump. Quis ham hock pork loin lorem burgdoggen aute. Incididunt ground round deserunt, ut in leberkas brisket salami kielbasa veniam ea culpa ut porchetta andouille. Ham hock ut kevin, andouille jowl leberkas turducken sint aliqua elit. Turducken meatloaf ground round ham hock, hamburger ball tip swine prosciutto.</p></div>
<div class="influencer left"></div></div> 

<div  class="about-line">
<div class="social" ></div>
<div class="about-text" id="about-3-content"> <h2 class="about">  Social Media Strategy</h2>
<p class="bacon">Bacon ipsum dolor amet pancetta shank leberkas ground round kielbasa beef ribs bacon flank doner buffalo boudin cow ham hock pork chop cupim. Rump short loin short ribs shoulder meatball jerky pig kevin shankle. Short ribs andouille tenderloin ground round, sirloin drumstick chuck leberkas corned beef doner short loin. Prosciutto bacon jerky salami boudin. Picanha pork chop jowl bacon, meatloaf ground round corned beef t-bone fatback pig.</p></div></div>
<div  class="about-line">
        <div class="about-text about-text-even" id="about-4-content">
<h2 class="about">  Design and Development</h2>
<p class="bacon">Bacon ipsum dolor amet ut frankfurter buffalo adipisicing, burgdoggen aliqua aliquip prosciutto andouille consectetur. Meatloaf consequat picanha brisket eiusmod pastrami jowl landjaeger incididunt esse est. Est frankfurter spare ribs short loin adipisicing fugiat boudin velit mollit ea cupim bresaola pastrami tenderloin jowl. Pancetta aliqua venison ham hock velit porchetta tempor reprehenderit quis biltong swine kielbasa corned beef. Buffalo ut in, alcatra non sunt venison shankle eiusmod ground round duis corned beef dolore cupidatat consectetur. Ribeye exercitation spare ribs consequat.</p></div><div class="design left"> </div>
</div>
</div>

</section>
<!-- CONTACT US LINK -->
 <section class="about-nav">
<nav id="navigation" class="container">
      <div>
<h2>Interested in working with us?<a class="button" style="margin-left: 50px" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></h2></div><hr>
    </nav>
  </section></div>
<?php get_footer(); ?>
