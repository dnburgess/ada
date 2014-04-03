<footer>
	<div class="row">
		<div class="map">
			<h3>Colorado Springs</h3>
			<p>2441 N. Union Blvd<br />
			CO Springs, CO 80909<br />
			(In front of the DMV)</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3106.4703222811736!2d-104.79374!3d38.86748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87134580d9c6ec43%3A0x75a8de65780f3154!2s2441+N+Union+Blvd!5e0!3m2!1sen!2sus!4v1395168104846"frameborder="0" style="border:0"></iframe>
		</div>
		<div class="map">
			<h3>Denver</h3>
			<p>2441 N. Union Blvd<br />
			CO Springs, CO 80909<br />
			(In front of the DMV)</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3106.4703222811736!2d-104.79374!3d38.86748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87134580d9c6ec43%3A0x75a8de65780f3154!2s2441+N+Union+Blvd!5e0!3m2!1sen!2sus!4v1395168104846"frameborder="0" style="border:0"></iframe>
		</div>
		<div class="map">
			<h3>Pueblo</h3>
			<p>2441 N. Union Blvd<br />
			CO Springs, CO 80909<br />
			(In front of the DMV)</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3106.4703222811736!2d-104.79374!3d38.86748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87134580d9c6ec43%3A0x75a8de65780f3154!2s2441+N+Union+Blvd!5e0!3m2!1sen!2sus!4v1395168104846"frameborder="0" style="border:0"></iframe>
		</div>
		<div class="social">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">YouTube</a></li>
			</ul>
		</div>
		<div class="branding">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/white-logo.png" alt=""></a>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/cc.png" alt="">
		</div>
	</div>
</footer><!-- End footer -->
	


	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	document.write('<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	
	

	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script> -->

	<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/main.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/gumby.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/elastislide/js/jquerypp.custom.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/elastislide/js/jquery.elastislide.js"></script>


<script>
	if ( $(window).width() > 800) {     
  		var $j = jQuery.noConflict();
		$j(document).ready(function() {
			$j( '#carousel' ).elastislide({
				minItems: 6,
			});

		});
	} else 
		if ( $(window).width() > 600) {
		var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j( '#carousel' ).elastislide({
					minItems: 4,
				});

			});
	} else {
  		var $j = jQuery.noConflict();
		$j(document).ready(function() {
			$j( '#carousel' ).elastislide({
				minItems: 3,
			});

		});
	}
</script>



	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<!-- Include js plugin -->
	<script src="<?php bloginfo('template_url'); ?>/assets/owl-carousel/assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		 	var owl = $("#owl-demo");
		 	owl.owlCarousel({
		      items : 2, //10 items above 1000px browser width
		      itemsDesktop : [960,1], //5 items between 1000px and 901px
		      itemsDesktopSmall : [960,1], // betweem 900px and 601px
		      itemsTablet: [600,1], //2 items between 600 and 0
		      itemsMobile : [400,1] // itemsMobile disabled - inherit from itemsTablet option
		  	});
		});
	</script>

 

	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/mobilenav/mobile-nav.js"></script>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
<?php wp_footer(); ?>
</body>
</html>