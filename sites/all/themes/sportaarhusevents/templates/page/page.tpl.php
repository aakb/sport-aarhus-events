<?php
// $Id: 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<?php
  if ($node->field_body_background_image[0]['imceimage_path'] != '') {
    $background_image = ' style="background: url(\'' . $node->field_body_background_image[0]['imceimage_path'] . '\') no-repeat center 80px;"';
  }
?>

<body class="<?php print $body_classes; ?>"<?php print $background_image ?>>
  <p><a name="top" id="top"></a></p>
  <div id="wrapper">
  <?php if ($aaktopbar): ?>
    <div id="aaktopbar" class="region clear-block">
      <div id="aaktopbar-inner" class="container-16">
        <?php print $aaktopbar; ?>
      </div>
    </div> <!--//end #aaktopbar -->
  <?php endif; ?>

  <div id="page" class="container-16 clear-block">

    <a name="navigation-top" id="navigation-top"></a>

    <div id="site-header" class="clear-block">
	    <div id="header-inner">
        <div id="branding" class="clear-block">
          <?php if ($site_logo): ?>
            <span id="logo"><?php print $site_logo; ?></span>
          <?php endif; ?>
        </div> <!--/#branding -->

        <?php if ($main_menu_links || $secondary_menu_links): ?>
        <div id="site-menu" class="grid-12">
          <div id="navbar-inner">
            <?php print $main_menu_links; ?>
            <?php print $secondary_menu_links; ?>
          </div> <!--/#navbar-inner -->
        </div> <!--/#site-menu -->
        <?php endif; ?>

        <?php if ($search_box): ?>
          <div id="search-box" class="grid-6 prefix-10"><?php print $search_box; ?></div>
        <?php endif; ?>
      </div> <!--/#header-inner -->

      <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
        <?php if ($header): ?>
        <div id="header-region" class="region <?php print ns('grid-16', $mission, 7); ?> clear-block">
          <?php print $header; ?>
        </div>
        <?php endif; ?>
      </div> <!--/#site-subheader -->
	  </div> <!--/#site-header -->

    <?php if ($mainmenu): ?>
      <div id="main-menu" class="clear-block">
        <div id="main-menu-inner" class="container-16">
          <?php print $mainmenu; ?>
        </div>
      </div> <!--//end #aaktopbar -->
    <?php endif; ?>    

    <div id="main">

      <?php if ($content_top): ?>
        <div id="content-top" class="region region-content-top">
      <?php print $content_top; ?>
        </div> <!-- /#content-top -->
      <?php endif; ?>

       <?php print $breadcrumb; ?>

        <div id="content" class="column <?php print ns('grid-16', $left, 4) . ' ' . ns('push-4', !$left, 4); ?>">
  	    <div id="content-inner">

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>
              <?php print $help; ?>

              <div id="main-content" class="region clear-block">
                <?php print $content; ?>
                <?php if ($right && !$is_front): ?>
                <div id="sidebar-right" class="column sidebar region grid-4">
                  <div id="sidebar-right-inner">
                    <?php print $right; ?>
                  </div>
                </div> <!--//end #sidebar-right-inner -->
                <?php endif; ?>

                <?php if ($content_bottom): ?>
                  <div id="content-bottom" class="region region-content_bottom">
                    <?php print $content_bottom; ?>
                  </div> <!-- /#content-bottom -->
                <?php endif; ?>

              </div> <!-- /#main-content -->

              <?php print $feed_icons; ?>



            </div> <!-- // #content-inner -->
          </div> <!-- //#content -->

          <?php if ($left): ?>
          <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12'); ?>">
                  <div id="sidebar-left-inner">
              <?php print $left; ?>
            </div>
          </div> <!-- //end #sidebar-left-inner -->
          <?php endif; ?>

          <?php if ($right && $is_front): ?>
          <div id="sidebar-right" class="column sidebar region grid-4">
            <div id="sidebar-right-inner">
              <?php print $right; ?>
            </div>
          </div> <!--//end #sidebar-right-inner -->
          <?php endif; ?>         

	</div> <!-- //end #main -->

  </div> <!-- /#page -->

  <div id="footer" class="container-16 clear-block">
    <?php if ($footer): ?>
      <div id="footer-region" class="container-16">
        <div id="footer-inner">
          <?php print $footer; ?>
        </div>
        <div id="to-top"><a href="#top"><?php print t('Top'); ?></a></div>
        </div> <!--//end #footer-inner -->
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div> <!-- /#footer -->

  <?php if ($footer_logos): ?>
    <div id="footer-logos" class="container-16 clear-block">
      <?php print $footer_logos; ?>
    </div>
  <?php endif; ?>

  <?php print $closure; ?>
  
  </div>
</body>
</html>