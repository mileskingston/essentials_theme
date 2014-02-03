	<?php if ($logo): ?>
	  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	<?php endif; ?>
	<?php
		if($template_file!='sites/all/themes/demo/templates/layout/maintenance-page.tpl.php' && $template_file!='sites/all/themes/demo/templates/layout/maintenance-page--offline.tpl.php') {
			$block = module_invoke('search', 'block_view');
			print render($block['content']);
		}
	?>
	<ul id="social">
	  <li><a href="http://twitter.com/whitefuse"><img alt="" src="/sites/demo.whitefusemedia.net/themes/essentials/images/icon-header-twitter.png" width="30" /></a></li>
	  <li><a href="http://facebook.com/whitefuse"><img alt="" src="/sites/demo.whitefusemedia.net/themes/essentials/images/icon-header-facebook.png" width="30" /></a></li>
	  <li><a href="http://twitter.com/whitefuse"><img alt="" src="/sites/demo.whitefusemedia.net/themes/essentials/images/icon-header-youtube.png" width="30" /></a></li>
	</ul>
	<?php if ($main_menu): ?>
	  
	  <div class="mobile-button-wrapper">
	    <span class="mobile-button">
		  <img src="/sites/demo.whitefusemedia.net/themes/essentials/images/icon-mobile-button-x2.png" width="30" alt="" />
		</span>
	  </div>
	  
	  <nav id="navbar" class="navigation">
		<?php print theme('links__system_main_menu', array(
		  'links' => $main_menu,
		  'attributes' => array(
			'id' => 'navbar-links',
			'class' => array('links', 'clearfix'),
		  ),
		  'heading' => array(
			'text' => t('Main menu'),
			'level' => 'h2',
			'class' => array('element-invisible'),
		  ),
		)); ?>
	  </nav><!-- /#main-menu -->
	<?php endif; ?>