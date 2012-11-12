
		</div> <!-- /container -->
		<footer role="contentinfo">
			<div class="container">
				<div id="site-info">
					<span class="hidden-phone">&copy; <?php echo date ('Y'); ?></span> All rights reserved by RalphPlumb.com
				</div><!-- #site-info -->
			</div>
		</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


		<!-- scripts concatenated and minified via ant build script-->
		<script src="<?php bloginfo ('template_directory'); ?>/js/plugins-ck.js"></script>
		<script src="<?php bloginfo ('template_directory'); ?>/js/script-ck.js"></script>
		<!-- Remove these before deploying to production -->
		<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

		<?php wp_footer(); ?>
	</body>
</html>