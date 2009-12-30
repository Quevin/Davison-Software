<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if IE 7]>
    <?php print $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
    <?php print $ie6_styles; ?>
  <![endif]-->
  <?php if ($local_styles): ?>
  <?php print $local_styles; ?>
  <?php endif; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
  <!-- begin page -->
  <div id="page" class="clearfix">
  
    <?php if ($content): ?>
    <div id="skip">
      <a href="#main-content"><?php print t('Skip to Main Content'); ?></a>
    </div>
    <?php endif; ?>
    
    <?php if ($banner): ?>
    <div id="banner" class="clearfix">
      <?php print $banner; ?>
    </div><!-- /banner -->
    <?php endif; ?> 
    
    <!-- beging header-top -->
    <div id="header-top" class="clearfix">     
      <?php if ($secondary_links): ?>
      <div id="secondary-menu">
        <?php print theme('links', $secondary_links); ?>
      </div><!-- /secondary_menu -->
      <?php endif; ?> 
        
      <?php if ($search_box): ?>
      <div id="search-box">
        <?php print $search_box; ?>
      </div><!-- /search-box -->
      <?php endif; ?>
      <?php if ($primary_links): ?>
      <div id="primary-menu">
        <?php /* print theme('links', $primary_links);  COMMENT FOR DROPDOWN MENU */ ?>
        <?php print $primary_links_tree; /* UNCOMMENT FOR DROPDOWN MENU */?>
      </div><!-- /primary_menu -->
      <?php endif; ?>   
    </div><!-- /header-top -->
    
    <!-- begin header-bottom -->
    <div id="header-bottom" class="clear">
      <!-- begin header-wraqpper -->
      <div id="header-wrapper" class="clearfix">
        <!-- begin header-first -->
        <div id="header-first">
          <?php if ($logo): ?>
          <!-- begin logo -->
          <div id="logo">
            <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img class="pngfix" src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
          </div><!-- /logo -->
          <?php endif; ?>
          <?php if ($site_name): ?>
          <h1><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <span id="slogan"><?php print $site_slogan; ?></span>
          <?php endif; ?>
        </div><!-- /header-first -->
        
        <?php if ($is_front AND $header_middle): ?>
        <!-- begin header-middle -->
        <div id="header-middle">
          <?php print $header_middle; ?>
        </div><!-- /header-middle -->
        <?php elseif (!$is_front AND $header_bottom_middle): ?>
        <!-- begin header-bottom-middle -->
        <div id="header-middle">
          <?php print $header_bottom_middle; ?>
        </div><!-- /header-bottom-middle -->
        <?php endif; ?>
        
        <!-- begin header-last -->
        <?php if ($is_front AND $header_last): ?>
        <div id="header-last">
          <?php print $header_last; ?>
        </div><!-- /header-last -->
        <?php elseif (!$is_front AND $header_bottom_last) : ?>
        <!-- begin header-bottom-last -->
        <div id="header-last" class="pngfix">
          <?php print $header_bottom_last; ?>
        </div><!-- /header-bottom-last -->
        <?php endif; ?>
      </div><!-- /header-wrapper -->
    </div><!-- /header-bottom -->
    
    <?php if ($preface_first || $preface_last): ?>
      <div id="preface-wrapper" class="<?php print $prefaces; ?> clearfix">
        <?php if ($preface_first): ?>
        <div id="preface-first" class="column">
          <?php print $preface_first; ?>
        </div><!-- /preface-first -->
        <?php endif; ?>

        <?php if ($preface_last): ?>
        <div id="preface-last" class="column">
          <?php print $preface_last; ?>
        </div><!-- /preface-last -->
        <?php endif; ?>
      </div><!-- /preface-wrapper -->
    <?php endif; ?>

    <div id="main-wrapper" class="clearfix">
      <a name="main-content" id="main-content"></a>

      <!-- begin content-wrapper -->
      <div id="content-wrapper">
        <div id="content-top">
        <?php if ($help): ?>
        <?php print $help; ?>
        <?php endif; ?>
        <?php if ($messages): ?>
        <?php print $messages; ?>
        <?php endif; ?>
        <?php if ($mission): ?>
        <div id="mission">
          <?php print $mission; ?>
        </div>
        <?php endif; ?>
        <?php if ($content_top):?>
          <?php print $content_top; ?>
        <?php endif; ?>
        </div><!-- /content-top -->
      
        <div id="content">
          <?php if ($tabs): ?>
          <div id="content-tabs" class="clear">
            <?php print $tabs; ?>
          </div>
          <?php endif; ?>
          <?php if ($content || $title): ?>
          <div id="content-inner" class="clear">
            <?php if ($title): ?>
            <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php if ($content): ?>
            <div id="content-content">
              <?php print $content; ?>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div><!-- /content -->

        <?php if ($content_bottom): ?>
        <!-- begin content-bottom -->
        <div id="content-bottom">
          <?php print $content_bottom; ?>
        </div><!-- /content-bottom -->
        <?php endif; ?>
      </div><!-- /content-wrapper -->

      <?php if ($sidebar_last): ?>
      <!-- beign sidebar-last -->
      <div id="sidebar-last">
        <div class="sidebar-last-shadow">
          <?php print $sidebar_last; ?>
        </div><!-- /sidebar-last-shadow -->
      </div><!-- /sidebar_last -->
      <?php endif; ?>
      
      <?php print $feed_icons; ?>
    </div><!-- /main-wrapper -->
    
    <?php if ($postscript_first || $postscript_middle || $postscript_last): ?>
    <div id="postscript-wrapper" class="<?php print $postscripts; ?> clearfix">
      <?php if ($postscript_first): ?>
      <div id="postscript-first" class="column">
        <?php print $postscript_first; ?>
      </div><!-- /postscript-first -->
      <?php endif; ?>

      <?php if ($postscript_middle): ?>
      <div id="postscript-middle" class="column">
        <?php print $postscript_middle; ?>
      </div><!-- /postscript-middle -->
      <?php endif; ?>

      <?php if ($postscript_last): ?>
      <div id="postscript-last" class="column">
        <?php print $postscript_last; ?>
      </div><!-- /postscript-last -->
      <?php endif; ?>
    </div><!-- /postscript-wrapper -->
    <?php endif; ?>

    <div id="footer-top"></div>

    <?php if ($footer_top || $footer || $footer_message): ?>
    <div id="footer" class="clearfix">
      <?php if ($footer_top): ?>
      <?php print $footer_top; ?>
      <?php endif; ?>
      <?php if ($footer): ?>
      <?php print $footer; ?>
      <?php endif; ?>
      <?php if ($footer_message): ?>
      <?php print $footer_message; ?>
      <?php endif; ?>
    </div><!-- /footer -->
    <?php endif; ?>
  </div><!-- /page -->
  <?php print $closure; ?>
</body>
</html>