<footer role="contentinfo">
    <p class="pull-right"><a href="#" title="Back to top"><i class="icon-chevron-up"></i></a></p>
    <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?></p>
    <nav><div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>&nbsp;</div><?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?></nav>
 </footer>
 </div> <!-- container -->
					
<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>
</html>