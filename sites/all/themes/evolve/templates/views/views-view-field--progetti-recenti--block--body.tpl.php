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
?>

<?php //print $output;
 //var_dump($row->field_data_field_foto_progetto_node_entity_type);
 $img_uri = file_create_url($row->_field_data["nid"]["entity"]->field_foto_progetto["und"][0]["uri"]) ;
 $nid = $row->nid;
 $body = $row->_field_data["nid"]["entity"]->body["und"][0]["value"];
 $descriz_breve = $row->_field_data["nid"]["entity"]->field_descrizione_breve["und"][0]["value"]; 
 $nodeurl = url('node/'. $nid);
 //var_dump( file_create_url($row->_field_data["nid"]["entity"]->field_foto_progetto["und"][0]["uri"]) );
?>
<div class="backgroundFotoProgettoCls">
  <img src="<?php print $img_uri; ?>" style="width:auto;"/>
  <div class="titleAndBodyCls">
    <p class="titoloProgettoCls"><a href="<?php print $nodeurl; ?>"><?php print $row->node_title;?></a></p>
    <p class="bodyProgettoCls"><?php print substr($descriz_breve, 0, 300)."...";  ?></p>
  </div>
  
</div>
