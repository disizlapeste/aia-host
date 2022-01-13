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
		slider_options.minSlides= 1;
		slider_options.maxSlides= 3;
		slider_options.moveSlides= 1;
		slider_options.ariaHidden = true;
		slider_options.ariaLive = true;
		slider_options.slideMargin = 35;
		var slidery = jQuery('.bxslider').bxSlider(slider_options);
		for(var index in slidery) {
			if(slidery[index].classList.contains('yene_fotos')){
				let numfoto = slidery[index].childElementCount;
				jQuery('.bxslider.yene_fotos').closest('.bx-wrapper').append('<div class="NumFotosCls">'+numfoto+' Foto'+'</div>');
				break;
			}
		}
    });
 </script>
<?php

/** THIS BLOCK with ID 115 corresponds to IMPIANTO YENE
 * 
 *  Taxonomy Term ID
 * tid => 27 (FRONAN)
 * tid => 28 (LOUBA)
 * tid => 29 (YENE)
 * tid => 30 (MOUMEKENG)
 * 
*/
?>
<div class="titleBlkCls">
	<h3 class="headline"><?php print render($block->subject); ?></h3>
</div>
<?php
  $nids = db_query("SELECT nid FROM {node} WHERE type = :type", array(':type' => 'dexp_portfolio'))
  ->fetchCol();
  $yene_fotos = [];
  foreach($nids as $nid) {
	$nodeObj = node_load($nid);
	if($nodeObj->field_place) {
		if($nodeObj->field_place['und'][0]['tid'] == "29") {
			//this node object correspond to yene fotogallery
			$images = $nodeObj->field_portfolio_images['und'];
			foreach($images as $img) {
				$yene_fotos[] = file_create_url($img['uri']);
			}		
		}
	}
  }

?>
<?php $count = count($yene_fotos); 
	if($count > 0) {
?>
<div class="bxslider yene_fotos" style="padding-left:25%; padding-right:25%;">
	<?php 
	foreach($yene_fotos as $foto) {
	?>
		<div class="slide singleFotoCls" style="margin-right:20px;"> <img src="<?php print $foto; ?>" /></div>
	<?php 
		}  // end foreach
	?>
</div>
<?php
	}// enf if 
?>





