<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <!-- Custom HTML TAGS Styles -->
  <?php if (theme_get_setting( 'head_tags' )): ?>
    <?php print theme_get_setting( 'head_tags' ); ?>
  <?php endif; ?>

  <?php print $styles; ?>

  <!-- Custom Theme Styles -->
  <?php if (theme_get_setting( 'head_css' )): ?>
    <style>
      <?php print theme_get_setting( 'head_css' ); ?>
    </style>
  <?php endif; ?>


  <?php print $scripts; ?>

  <!-- Custom Theme Scripts -->
  <?php if (theme_get_setting( 'head_scripts' )): ?>
    <script type="text/javascript">
      <?php print theme_get_setting( 'head_scripts' ); ?>
    </script>
  <?php endif; ?>

  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>

<Script type = "text / javascript">
ventana. $ Zopim || (function (d, s) {var z = $ Zopim = function (c) {
z ._. empujar (c)}, $ = zs =
d.createElement (s), e = d.getElementsByTagName (s) [0]; z.set = Función (o) {z.set.
_.push (o)}; z ._ = []; z.set ._ = [] ;. $ Async = 0;!. $ SetAttribute ('charset', 'utf-8');
$ .src = '// V2.zopim.com/?38fe6dw0zxvizcOaDmnQ3P8gZXCWRWl4';zt=+new Fecha; $.
type = "text / javascript '; e.parentNode.insertBefore ($, e)}) (document,' script ');

</ Script>


</body>
</html>
