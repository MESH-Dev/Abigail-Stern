<footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

    <script src='<?php bloginfo("template_url") ?>/assets/js/jquery.easing.min.js'></script>
    <script src='<?php bloginfo("template_url") ?>/assets/js/supersized.3.2.7.js'></script>
    <script src='<?php bloginfo("template_url") ?>/assets/js/supersized.shutter.min.js'></script>

    <?php if ( basename( get_page_template() ) == 'portfolio.php' ) { ?>
        <!-- Plugin initialization -->
    	<script type="text/javascript">
    		// Initialize the plugin with no custom options
    		$(document).ready(function () {
    			// None of the options are set
    			$("div#makeMeScrollable").smoothDivScroll({
    				autoScrollingMode: "onStart"
    			});
    		});
    	</script>
    <?php } ?>

    <?php wp_footer(); ?>

</footer>
</body>
</html>
