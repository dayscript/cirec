<!--.page -->
<div role="document" class="page">
  <?php if (!empty($page['header_before'])): ?>
  <!--.l-header-before -->
  <div class="l-header-before-wrapper">
    <div class="l-header-before-region row">
      <div class="columns">
        <?php print render($page['header_before']); ?>
      </div>
    </div>
  </div>
  <!--./l-header-before -->
  <?php endif; ?>

  <!--.l-header -->
  <header role="banner" class="l-header">
    <?php /*if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
          <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
            <ul class="title-area">
              <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
              <li class="toggle-topbar menu-icon">
                <a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
            </ul>

            <section class="top-bar-section">
              <?php if ($top_bar_main_menu) : ?>
                <?php print $top_bar_main_menu; ?>
              <?php endif; ?>
              <?php if ($top_bar_secondary_menu) : ?>
                <?php print $top_bar_secondary_menu; ?>
              <?php endif; ?>
            </section>
          </nav>
          <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif;*/ ?>


    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="row <?php print $alt_header_classes; ?>">

        <?php if ($linked_logo): print $linked_logo; endif; ?>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name" class="element-invisible">
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>

        <?php if ($alt_main_menu): ?>
          <nav id="main-menu" class="navigation" role="navigation">
            <?php print ($alt_main_menu); ?>
          </nav> <!-- /#main-menu -->
        <?php endif; ?>

        <?php if ($alt_secondary_menu): ?>
          <nav id="secondary-menu" class="navigation" role="navigation">
            <?php print $alt_secondary_menu; ?>
          </nav> <!-- /#secondary-menu -->
        <?php endif; ?>

      </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <?php print render($page['header']); ?>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>
  </header>
  <!--/.l-header -->

  <!-- hr-stripes -->
  <div class="hr-stripes hr-stripes-4-rows"><div class="row gradient"></div></div>

