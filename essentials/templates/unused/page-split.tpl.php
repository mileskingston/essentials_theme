<div id="wrapper">
	<div id="page">

		<div id="header" class="section"><div class="holder clearfix">
			<?php include('branding.inc'); ?>
			<?php print render($page['header']); ?>
			<?php if ($breadcrumb): ?>
				<div id="crumbs"><?php print $breadcrumb; ?></div>
	  		<?php endif; ?>
		</div></div><!-- /#header -->

		<div id="main" class="page-split">

			<div id="messages" class="section"><div class="holder clearfix">
				<?php print $messages; ?>
			</div></div><!-- /#messages -->

			<div id="banner" class="section"><div class="holder clearfix">
				<?php print render($page['banner']); ?>
	  		</div></div><!-- /#banner -->

	  		<div id="principle" class="section"><div class="holder clearfix">

	  			<div id="menu" class="section">
					<?php print render($page['menu']); ?>
	  			</div><!-- /#menu -->

	  			<div id="content" class="section clearfix">
					<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
					<a id="main-content"></a>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
					<?php print render($page['content']); ?>
					<?php print $feed_icons; ?>
	  			</div><!-- /#content -->

	  			<div id="aside" class="section clearfix">
					<?php print render($page['aside']); ?>
	  			</div><!-- /#aside -->

	  		</div></div><!-- /#principle -->

	  		<div id="signposts" class="section"><div class="holder clearfix">

	  			<div id="left" class="section">
					<?php print render($page['left']); ?>
	  			</div><!-- /#left -->

	  			<div id="right" class="section">
					<?php print render($page['right']); ?>
	  			</div><!-- /#right -->

	  		</div></div><!-- /#signposts -->

			<div id="trailer" class="section"><div class="holder clearfix">
				<?php print render($page['trailer']); ?>
	  		</div></div><!-- /#trailer -->

		</div><!-- /#main -->

		<div id="footer" class="section"><div class="holder clearfix">
	 	 	<?php print render($page['footer']); ?>
		</div></div><!-- /#footer -->

	</div><!-- /#page -->
</div><!-- /#wrapper -->