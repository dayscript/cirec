<?php include_once 'inc/_header.php'; ?>


  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>


  <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured">
      <?php print render($page['featured']); ?>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>


  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>


  <div class="highlight-wrapper">
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
  </div>


  <!--.l-main -->
  <main role="main" class="row l-main">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.l-main -->


  <!-- .l-content-after -->
  <?php if (!empty($page['content_after'])): ?>
    <div class="l-content-after row">
      <!-- <div class="columns"> -->
        <?php print render($page['content_after']); ?>
      <!-- </div> -->
    </div>
  <?php endif; ?>
  <!-- /.l-content-after -->


  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-8 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-8 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-8 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>


<?php include_once 'inc/_footer.php'; ?>