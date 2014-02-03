<div id="wrapper">
	<div id="page">

		<div id="header" class="section"><div class="holder clearfix">
			<?php include('branding.inc'); ?>
			<?php print render($page['header']); ?>
		</div></div><!-- /#header -->

		<div id="main" class="full"><div class="holder">

			<?php print $messages; ?>

			<div id="banner" class="section"><div class="holder clearfix">
				<?php print render($page['banner']); ?>
	  		</div></div><!-- /#banner -->

	  		<div id="principle" class="section"><div class="holder clearfix">
				<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

	  			<div id="content" class="section clearfix">
					<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
					<a id="main-content"></a>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
					<?php print render($page['content']); ?>
					<?php print $feed_icons; ?>
	  			</div><!-- /#content -->

	  		</div></div><!-- /#principle -->
	  		
			</div></div><!-- /#main -->

			<div id="trailer" class="section"><div class="holder clearfix">
				<?php print render($page['trailer']); ?>
	  		</div></div><!-- /#trailer -->
            
               <header id="fi-header" class="fi-block">
            		<div id="fi-header-devices" class="cf">
                		<div class="fi-devices_wrap fi-header-1">
                    		<img data-width="259px" data-height="259px" src="/sites/all/themes/essentials/images/icon-footer-sun-x1.png" alt="" />
                		</div>
                	</div>
        		</header>            
            
            <div id="waves">
            	<div class="wave"></div>
            	<div class="wave-2"></div>
            </div>

		<div id="footer" class="section"><div class="holder clearfix">
	 	 	<?php print render($page['footer']); ?>
		</div></div><!-- /#footer -->

	</div><!-- /#page -->

</div><!-- /#wrapper -->