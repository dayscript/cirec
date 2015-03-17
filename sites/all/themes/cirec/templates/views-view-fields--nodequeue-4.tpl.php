<?php
/**
 * Template: Slider Propuesta de Valor
 *---------------------------------------
 * Este template es utilizado para mostrar la imagen principal (del tipo de contenido)
 * como 'background' de un div y asi poder lograr la presentación segun el diseño
 * Se utiliza este archivo para evitar el uso de un campo VIEWS_PHP, y debido a que los
 * campos 'Custom Text' en drupal no permiten la adicion de estilos CSS-inline o etiquetas <style>
 */


/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
    <?php
        // Guarda la Url de la imagen, para luego añadirla como background-image
        $row_bg = file_create_url($row->field_field_image[0]['rendered']['#file']->uri);
    ?>
    <div class="slide slide-<?php print $row->nid; ?>"
         style="background-image: url('<?php print $row_bg; ?>');">

        <?php if (!empty($field->separator)): ?>
            <?php print $field->separator; ?>
        <?php endif; ?>

        <?php print $field->wrapper_prefix; ?>
        <?php print $field->label_html; ?>
        <?php print $field->content; ?>

        <?php print $field->wrapper_suffix; ?>
    </div>
<?php endforeach; ?>

<div class="hr-stripes hr-stripes-4-rows"><div class="row gradient"></div></div>
