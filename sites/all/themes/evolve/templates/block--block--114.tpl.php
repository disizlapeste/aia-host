<script>
    jQuery(document).ready(function(){
        var slider_options = Array();
        slider_options.slideWidth = 500;
        slider_options.nextText = '<i class="fa fa-angle-right"></i>';
        slider_options.prevText = '<i class="fa fa-angle-left"></i>';
        slider_options.randomStart = false;
        slider_options.responsive = true;
        slider_options.infinite = true;
        slider_options.auto = false;
        slider_options.pause = 4000;
        slider_options.keyboardEnabled = true;
        slider_options.pager= false;
		slider_options.minSlides= 2;
		slider_options.maxSlides= 3;
		slider_options.moveSlides= 1;
		slider_options.ariaHidden = true;
		slider_options.ariaLive = true;
      jQuery('.bxslider').bxSlider(slider_options);
    });
 </script>
<?php

/** THIS BLOCK with ID 114 corresponds to IMPIANTO LOUBA
 * 
 *  Taxonomy Term ID
 * tid => 27 (FRONAN)
 * tid => 28 (LOUBA)
 * tid => 29 (YENE)
 * tid => 30 (MOUMEKENG)
 * 
*/
?>

<?php
  $nids = db_query("SELECT nid FROM {node} WHERE type = :type", array(':type' => 'dexp_portfolio'))
  ->fetchCol();
  $louba_fotos = [];
  foreach($nids as $nid) {
	$nodeObj = node_load($nid);
	if($nodeObj->field_place) {
		if($nodeObj->field_place['und'][0]['tid'] == "28") {
			//this node object correspond to louba fotogallery
			$images = $nodeObj->field_portfolio_images['und'];
			foreach($images as $img) {
				$louba_fotos[] = file_create_url($img['uri']);
			}		
		}
	}
  }

?>
<?php $count = count($louba_fotos); 
	if($count > 0) {
?>
<div class="bxslider" style="padding-left:25%; padding-right:25%;">
	<?php 
	foreach($louba_fotos as $foto) {
	?>
		<div class="slide singleFotoCls" style="margin-right:20px;"> <img src="<?php print $foto; ?>" /></div>
	<?php 
		}  // end foreact
	}// enf if
	?>
</div>



