<nav>
	<a href="https://www.visithardenberg.nl/#" title="Menu" class="navtoggle visible-xs"><i class="fa fa-bars fa-left"></i>Menu</a>
	<div class="menu-hoofdnavigatie-container">
		<?php
			
			wp_nav_menu(array('theme_location' => 'header-menu','depth'           => -1, ));							

		?>
	</div>	
</nav>