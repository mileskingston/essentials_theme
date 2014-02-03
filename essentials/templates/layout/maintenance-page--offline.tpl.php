<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head profile="<?php //print $grddl_profile; ?>">

  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
	<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

	<div id="wrapper">
		<div id="page">

			<div id="header" class="section"><div class="holder clearfix">
				<?php include('branding.inc'); ?>
				<?php print render($page['header']); ?>
			</div></div><!-- /#header -->

			<div id="main" class="default">

				<div id="messages" class="section"><div class="holder clearfix">
					<?php print $messages; ?>
				</div></div><!-- /#messages -->

				<div id="banner" class="section"><div class="holder clearfix">
					<?php print render($page['banner']); ?>
					</div></div><!-- /#banner -->

					<div id="principle" class="section"><div class="holder clearfix">
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

						<div id="menu" class="section">
						<?php print render($page['menu']); ?>
						</div><!-- /#menu -->

						<div id="content" class="section clearfix">
						<a id="main-content"></a>
						<?php print render($title_prefix); ?>
						<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
						<?php print render($title_suffix); ?>
						<?php print render($page['help']); ?>
						<?php print render($page['content']); ?>
						<?php print $feed_icons; ?>
						</div><!-- /#content -->
				
						<div id="aside" class="section clearfix">
						<?php print render($page['aside']); ?>
						</div><!-- /#aside -->

					</div></div><!-- /#principle -->

				<div id="trailer" class="section"><div class="holder clearfix">
					<?php print render($page['trailer']); ?>
					</div></div><!-- /#trailer -->

			</div><!-- /#main -->

			<div id="footer" class="section"><div class="holder clearfix">
				<?php print render($page['footer']); ?>
			</div></div><!-- /#footer -->

		</div><!-- /#page -->
	</div><!-- /#wrapper -->

</body>

</html>
