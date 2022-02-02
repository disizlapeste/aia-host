<?php

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
$img_uri = file_create_url($row->_field_data["nid"]["entity"]->field_foto_progetto["und"][0]["uri"]) ;
$nid = $row->nid;
$body = $row->_field_data["nid"]["entity"]->body["und"][0]["value"];
$descriz_breve = $row->_field_data["nid"]["entity"]->field_descrizione_breve["und"][0]["value"]; 
$nodeurl = url('node/'. $nid);
?>
  <div class="left"><img src="<?php print $img_uri; ?>" style="width:260px;"/></div>
  <div class="right">
      <div class="title"><?php print $row->node_title; ?></div>
      <div class="descriz_breve"><?php print substr($descriz_breve, 0, 300)."...";  ?></div>
      <div class="read_more"><a href="<?php print $nodeurl; ?>"><?php print 'To know more' ?></a></div>
  </div>


