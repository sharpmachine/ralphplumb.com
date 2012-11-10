<?php get_header(); ?>

<section id="page">

	<div class="row" id="book">
		<div class="span5" id="form">
			<ul class="unstyled pull-left">
				<li>Receive more leads through LinkedIn Groups</li>
				<li>Become a thought leader with LinkedIn SEO Tips</li>
				<li>Attract hundred of targeted attendees to events</li>
			</ul>
			<div class="pull-left" id="book-cover">
				<img src="<?php bloginfo('template_directory') ?>/img/book-cover.png" alt="Book Cover">
			</div>
			<form action="" class="signup">
				<input type="text" placeholder="Your Name">
				<input type="email" placeholder="Your Email"><br>
				<input type="submit" value="Download Now">
			</form>
		</div><!-- #form -->
		<div class="span5" id="blog">
			<h2 class="arrow pull-left">Blog</h2>
			<a href="http://mindprotein.com/recent-blog-posts/" class="btn btn-small pull-right">View All ></a>
			<div id="posts">
				<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
				<?php endif; ?>
			</div>
		</div><!-- #blog -->
	</div><!-- #book -->
	
	<h2 class="arrow">Social Media</h2>
	
	<div class="row" id="social-media">
		<div class="span3 sm">
			<a href="http://www.facebook.com/RHPlumb" id="facebook"></a>
		</div>
		<div class="span3 sm">
			<a href="https://twitter.com/RalphPlumb" id="twitter"></a>
		</div>
		<div class="span3 sm">
			<a href="https://plus.google.com/115483853130579109361/" id="google"></a>
		</div>
		<div class="span3 sm">
			<a href="http://www.linkedin.com/in/ralphplumb" id="linkedin"></a>
		</div>
	</div><!-- #social-media -->
	
</section><!-- #page -->

<?php get_footer(); ?>
