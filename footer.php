
<footer>
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3 col-lg-2">
				<?php
					$menu_location = 'footer1-menu';
					$menu_locations = get_nav_menu_locations();
					$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
					$menu_name = (isset($menu_object->name) ? $menu_object->name : '');

					echo('<h2>'.$menu_name.'</h2>');
					wp_nav_menu(array('theme_location' => 'footer1-menu' ));
				?>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-2">
				<?php
					$menu_location = 'footer2-menu';
					$menu_locations = get_nav_menu_locations();
					$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
					$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
					echo('<h2>'.$menu_name.'</h2>');
					wp_nav_menu(array('theme_location' => 'footer2-menu' ));
				?>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-lg-offset-2">
				<?php register_sidebar(array(   'name' => __('Widget Area 2')  ));?> 
				<h2>Over Visit Hardenberg</h2>	
				<p>Visit Hardenberg is de portal waar alles wat Hardenberg en omgeving te bieden heeft te vinden is. De stichting achter Visit Hardenberg bestaat uit voornamelijk ondernemers in de recreatiebranche, maar ook andere belanghebbenden. De regio promoten door samenwerking staat centraal.</p>
				<a href="http://www.vechtdaloverijssel.nl/" title="Vechtdal Overijssel" target="_blank" rel="nofollow" class="footerlogo"><img src="data:image/png;base64,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" alt="Vechtdal Overijssel - Visit Hardenberg" pagespeed_url_hash="2668458125" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><a href="http://hetreestdal.nl/" title="Het Reestdal" target="_blank" rel="nofollow" class="footerlogo"><img src="<?php echo get_template_directory_uri(); ?>/downloaded/xlogo-het_reestdal.png.pagespeed.ic.GQGd3ADYjL.png" alt="Het Reestdal - Visit Hardenberg" pagespeed_url_hash="2069340649" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><a href="http://www.hardenbergdekrachtvangewoondoen.nl/" title="Regio Hardenberg" target="_blank" rel="nofollow" class="footerlogo"><img src="<?php echo get_template_directory_uri(); ?>/downloaded/xlogo-regio_hardenberg.png.pagespeed.ic.-DODAMNlfp.png" alt="Regio Hardenberg - Visit Hardenberg" pagespeed_url_hash="3020234466" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>	
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p class="outro">© Copyright 2015 <a href="<?php echo site_url(); ?>" title="Visit Hardenberg - Een onvergetelijke vakantie voor iedereen!">Visit Hardenberg</a></p>
			</div>
		</div>
	</div>
</div>
</footer>
<div id="popin_container" class="hidden-xs hidden-sm popins_hidden" style="right: -320px;">
	<div class="popin" style="opacity: 1;">
		<span class="popin_close"><i class="fa fa-close"></i></span>
		<h1>Attractiepark Slagharen</h1>
		<p></p>
		<a href="http://www.slagharen.com/familieplezier/?tt=2661_693256_186690_&amp;r=" title="Bestel hier je tickets" class="btn btn-primary btn-small" target="_blank" fa="" fa-ticket="" fa-left"="">Bestel hier je tickets</a>
	</div>
</div>
<div class="label_social visible">
	<ul>
		<li class="twitter">
			<a href="https://twitter.com/intent/tweet/?text=Ontdek+alles+over+Hardenberg&amp;url=https%3A%2F%2Fwww.visithardenberg.nl&amp;via=VisitHardenberg&amp;hashtags=" class="dbk-social-share" target="_blank" title="Delen op Twitter">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<li class="facebook">
			<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.visithardenberg.nl" class="dbk-social-share" target="_blank" title="Delen op Facebook">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<li class="linkedin">
			<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.visithardenberg.nl&amp;title=Ontdek+alles+over+Hardenberg&amp;source=https://www.visithardenberg.nl&amp;summary=Op+Visit+hardenberg+krijg+je+een+overzicht+van+alle+accomodaties%2C+bedrijven+en+activiteiten+in+en+rond+de+omgeving+van+Hardenberg.+" class="dbk-social-share" target="_blank" title="Delen op LinkedIn">
				<i class="fa fa-linkedin"></i>
			</a>
		</li>
		<li class="google">
			<a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.visithardenberg.nl" class="dbk-social-share" target="_blank" title="Delen op Google Plus">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
			<li class="pinterest">
			<a href="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.visithardenberg.nl&amp;media=https%3A%2F%2Fwww.visithardenberg.nl%2Fwp-content%2Fuploads%2F2015%2F09%2Fdefault-placeholder-1024x682.jpg&amp;description=Op+Visit+hardenberg+krijg+je+een+overzicht+van+alle+accomodaties%2C+bedrijven+en+activiteiten+in+en+rond+de+omgeving+van+Hardenberg.+&amp;hashtags=" class="dbk-social-share" target="_blank" title="Delen op Pinterest">
				<i class="fa fa-pinterest"></i>
			</a>
		</li>
		<li class="whatsapp visible-xs visible-sm">
			<a href="whatsapp://send?text=Ontdek alles over Hardenberg - https://www.visithardenberg.nl" data-action="share/whatsapp/share">
				<i class="fa fa-whatsapp"></i>
			</a>
		</li>
	</ul>
</div>	

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/downloaded/app.js.pagespeed.jm.gIR5fBMY7e.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/downloaded/placeholders.jquery.min.js.pagespeed.jm.bb_6sLKyQr.js"></script>
<script>(function($){$('a').each(function(index,element){if(element.href.indexOf(window.location.origin)==-1){var linklocation=element.href;$(element).attr('target','_blank');}})})(jQuery)</script>

<script type="text/javascript" id="">var _mfq=_mfq||[];(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mouseflow.com/projects/6809f0b8-c859-4b15-b0e5-13182efcee1f.js";document.getElementsByTagName("head")[0].appendChild(a)})();</script><script type="text/javascript" id="">(function(){var a=window._fbq||(window._fbq=[]);if(!a.loaded){var b=document.createElement("script");b.async=!0;b.src="//connect.facebook.net/en_US/fbds.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c);a.loaded=!0}a.push(["addPixelId","1399200173693759"])})();window._fbq=window._fbq||[];window._fbq.push(["track","PixelInitialized",{}]);</script>
<noscript>&lt;img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1399200173693759&amp;amp;ev=PixelInitialized"&gt;</noscript>
<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:85627,hjsv:5};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"//static.hotjar.com/c/hotjar-",".js?sv\x3d");</script>

<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","//connect.facebook.net/en_US/fbevents.js");fbq("init","940403646026311");fbq("track","PageView");</script>
<noscript>&lt;img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=940403646026311&amp;amp;ev=PageView&amp;amp;noscript=1"&gt;</noscript>
<div style="display: none; visibility: hidden;">
	<script type="text/javascript">document.write('\x3cscript src\x3d"'+("https:"==document.location.protocol?"https":"http")+'://tm.tradetracker.net/public/tracker.js" type\x3d"text/javascript"\x3e\x3c/script\x3e');</script><script src="<?php echo get_template_directory_uri(); ?>/downloaded/tracker.js" type="text/javascript"></script>
	<script type="text/javascript">var oTracker=new Tracker({type:"a",site:186690,version:1});</script>
	<noscript></noscript>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/downloaded/update.min.js"></script>
<img src="<?php echo get_template_directory_uri(); ?>/downloaded/pageview" alt="">
<div id="ads"></div>
</body>
</html>