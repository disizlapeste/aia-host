<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
  global $language;
 $lingua = $language->language;
 $readmoretxt = "Leggi tutto"; 
 if($lingua == 'fr') $readmoretxt = "En savoir plus";
 if($lingua == 'en') $readmoretext = "Read more";
 $title = $row->node_title;
 $nid = $row->nid;
 $body = $row->_field_data["nid"]["entity"]->body["und"][0]["value"];
 $nodeurl = url('node/'. $nid);

?>

<header class="meta"> <h2 class="titolo"><a><?php print $title; ?></a></h2></header>
<?php print substr($body, 0, 300)."..."; ?>
<p class="eventolnk"><a href="<?php print $nodeurl; ?>"><?php print $readmoretxt; ?></a></p>
