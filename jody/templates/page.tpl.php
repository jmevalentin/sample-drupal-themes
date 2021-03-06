

<?php if (!empty($page['featured'])): ?>
  <div class="row">
    <div class="large-12 columns">
      <?php print render($page['featured']); ?>
    </div>
  </div>
<?php endif; ?>
<div class="main row">
<!-- Top bar -->
<?php if ($top_bar): ?>
  <div class="top-bar-menu <?php print $top_bar_classes; ?>">
    <nav class="top-bar">
      <ul class="title-area">
        <li class="name"><h1><a href="/"><img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a><?php print $linked_site_name; ?></h1></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
      </ul>
      <section class="top-bar-section">
        <?php if ($main_menu_links) :?>
          <?php print $main_menu_links; ?>
        <?php endif; ?>
        <?php if ($secondary_menu_links) :?>
          <?php print $secondary_menu_links; ?>
        <?php endif; ?>
      </section>
    </nav>
  </div>
<?php endif; ?>
<!-- End top bar -->

<!-- Title, slogan and menu -->
<?php if ($alt_header): ?>
  <div class="alt-top-bar-section row<?php print $alt_header_classes; ?>">

    <?php if ($site_name): ?>
      <h1 title="<?php print $site_name; ?>" id="site-name" class="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></a>
      </h1>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <h2 title="<?php print $site_slogan; ?>" id="site-slogan" class="site-slogan">
        <?php print $site_slogan; ?>
      </h2>
    <?php endif; ?>

    <?php if ($main_menu_links) :?>
      <?php print $main_menu_links; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>
<!-- End title, slogan and menu -->
  <?php if ($messages): print $messages; endif; ?>
  <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
  <div id="main" class="<?php print $main_grid; ?> columns">
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>

    <a id="main-content"></a>

    <?php if ($title && !$is_front): ?>
      <?php print render($title_prefix); ?>
      <h1 id="page-title" class="title"><?php print $title; ?></h1>
      <?php print render($title_suffix); ?>
    <?php endif; ?>

    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php //if (!empty($page['footer'])): ?>
    <footer id="footer" class="row">
      <div class="large-12 columns">
        
        <?php print render($page['footer']); ?>
      </div>
    </footer>
    <?php //endif; ?>
    <div class="bottom-bar panel">
      
      <div class="row">
        <div class="large-4 columns">
          <div class="legal"><?php print t('Paid for by JODY hice for congress'); ?></div>
        </div>
        <div class="large-6 small-12 columns">
          <div class="brand"><?php print t('Innovation By Burrell & Co'); ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($page['sidebar_first'])): ?>
    <div id="sidebar-first" class="<?php print $sidebar_first_grid; ?> columns sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['sidebar_second'])): ?>
    <div id="sidebar-second" class="<?php print $sidebar_sec_grid; ?> columns sidebar">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div>
<?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
  <div class="row">
    <div class="large-4 columns">
      <?php print render($page['triptych_first']); ?>
    </div>
    <div class="large-4 columns">
      <?php print render($page['triptych_middle']); ?>
    </div>
    <div class="large-4 columns">
      <?php print render($page['triptych_last']); ?>
    </div>
  </div>
<?php endif; ?>
<?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
  <footer class="row">
    <?php if (!empty($page['footer_firstcolumn'])): ?>
      <div id="footer-first" class="large-3 columns">
        <?php print render($page['footer_firstcolumn']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_secondcolumn'])): ?>
      <div id="footer-second" class="large-3 columns">
        <?php print render($page['footer_secondcolumn']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_thirdcolumn'])): ?>
      <div id="footer-third" class="large-3 columns">
        <?php print render($page['footer_thirdcolumn']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_fourthcolumn'])): ?>
      <div id="footer-fourth" class="large-3 columns">
        <?php print render($page['footer_fourthcolumn']); ?>
      </div>
    <?php endif; ?>
  </footer>
<?php endif; ?>

