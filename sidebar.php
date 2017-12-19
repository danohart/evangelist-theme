<div id="left-col" class="borderbox">
	<img src="<?php bloginfo('template_url'); ?>/images/family.jpg"/>
	<h3 align="center">Johna, Steve, &amp; Andrew Hart</h3>
	<div id="nav">
		<ul>
			<?php wp_nav_menu( array('menu' => 'Main Nav', 'theme_location' => 'main-menu', 'items_wrap' => '%3$s', 'container' => 'false'  )); ?>
		</ul>
	</div>
 
	<div class="contact-info">
	 	<i class="fa fa-mobile"></i><a href="tel:8122012286">812.201.2286</a>
	</div>

	<div class="contact-info">
		<i class="fa fa-envelope-square"></i><a href="mailto:broshart@gmail.com">broshart@gmail.com</a>
	</div>

	<div class="contact-info">
		<i class="fa fa-twitter-square"></i><a href="http://twitter.com/preacherhart">@PreacherHart</a>
	</div>

	<br/>
	<!-- PayPal Donate Button -->
	<div align="center">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

		    <!-- Identify your business so that you can collect the payments. -->
		    <input type="hidden" name="business"
		        value="broshart@gmail.com">

		    <!-- Specify a Donate button. -->
		    <input type="hidden" name="cmd" value="_donations">

		    <!-- Specify details about the contribution -->
		    <input type="hidden" name="item_name" value="Evangelist Steve Hart">
		    <input type="hidden" name="item_number" value="Individual Support">
		    <input type="hidden" name="currency_code" value="USD">

		    <!-- Display the payment button. -->
		    <input type="image" name="submit"
		    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png"
		    alt="Donate">
		    <img alt="" width="1" height="1"
		    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

		</form>
	</div>

	<div class="contact-info">
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</div>

	<div class="clearfix"></div>

</div>