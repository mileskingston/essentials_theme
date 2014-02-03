<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head profile="<?php print $grddl_profile; ?>">

<!-- delete this script for live -->
<script type="text/javascript"> 
var disqus_developer = 1; // developer mode is on
</script>
<!-- end delete -->

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
    
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close-box">X</a>
            <h2>Modal Box</h2>
            <p>This is a sample modal box that can be created using the powers of CSS3.</p>
            <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
        </div>
    </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>

</html>
