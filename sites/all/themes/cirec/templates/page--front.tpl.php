<?php include_once 'inc/_header.php'; ?>


  <?php
  /*---------------------------------------*
   * NOTA:
   * El orden de presentación de las regiones de drupal
   * fue reordenado en el caso de esta plantilla (página de inicio)
   * para lograr la estructurá del diseño.
   *
   * Adicional a esto, otras regiones (highlighted, sidebar),
   * o elementos (title, breadcrums) fueron comentadas,
   * para aumentar la legibilidad de esta plantilla
   *
   * Podría ser posible unificar las dos plantillas
   * (page--front-tpl y page.tpl) añadiendo algunas condiciones.
   *---------------------------------------*/
  ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
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


  <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured">
      <?php print render($page['featured']); ?>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>


  <?php /*if (!empty($page['highlighted'])): ?>
    <div class="highlight-wrapper">
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    </div>
  <?php endif;*/ ?>


  <!--.l-main -->
  <main role="main" class="row l-main">

    <?php /*if ($title && !$is_front): ?>
      <div class="page-title-wrapper">
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      </div>
    <?php endif; */?>

    <?php /* if ($breadcrumb && !$is_front): print $breadcrumb; endif; */ ?>

    <?php /*if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif;*/ ?>
  </main>
  <!--/.l-main -->


  <!-- .l-content-after -->
  <?php if (!empty($page['content_after'])): ?>
    <div class="l-content-after row">
        <?php print render($page['content_after']); ?>
    </div>
  <?php endif; ?>
  <!-- /.l-content-after -->


  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <?php
      // Validar si la region del tryptych_middle esta vacia
      // De estar vacia, mostrar la región triptych-first con el doble de ancho
        $triptych_middle = ( empty($page['triptych_middle']) ) ? false : true;
        $triptych_first_width = ( $triptych_middle ) ? 'medium-8' : 'medium-16';
      ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first <?php print $triptych_first_width; ?> columns">
          <?php print render($page['triptych_first']); ?>
        </div>

        <?php if ($triptych_middle): ?>
          <div class="triptych-middle medium-8 columns">
            <?php print render($page['triptych_middle']); ?>
          </div>
        <?php endif; ?>

        <div class="triptych-last medium-8 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>


<?php include_once 'inc/_footer.php'; ?>