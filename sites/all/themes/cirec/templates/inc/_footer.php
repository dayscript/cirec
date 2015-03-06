
<?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third medium-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth medium-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-before -->
  <div class="l-footer-before-region">
      <?php print render($page['footer_before']); ?>
  </div>
  <!--./l-footer-before -->

  <!-- hr-stripes -->
  <div class="hr-stripes hr-stripes-4-rows"><div class="row gradient"></div></div>

  <!--.l-footer -->
  <div class="l-footer-wrapper">
    <footer class="l-footer row" role="contentinfo">
      <?php if (!empty($page['footer'])): ?>
        <div class="footer columns">
          <?php print render($page['footer']); ?>
        </div>
      <?php endif; ?>

      <?php if ($site_name) : ?>
        <div class="copyright columns">
          &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </footer>
  </div>
  <!--/.l-footer -->


  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->