<!-- nanogallery2
<script  type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>
<link  href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
 -->
<?php

/** THIS BLOCK with ID 116 corresponds to INTERVENTI CORSI FRONAN
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
  $moumekeng_fotos = [];
  foreach($nids as $nid) {
  $imgDetails = [];
  $imgArr = [];
	$nodeObj = node_load($nid);
  if($nodeObj->field_place['und'][0]['tid'] != "30") continue;
  //title
  $imgDetails['titolo'] = $nodeObj->title;
  //category  tid: 1->assemblee 2->eventi 3->interviste 26->formazione 31->progetto
  $imgDetails['category'] = $nodeObj->field_portfolio_categories['und'][0]['tid'];
  $imgDetails['data'] = date('d/m/Y', strtotime($nodeObj->field_data_foto['und'][0]['value'])) ;


	if($nodeObj->field_place) {
		if($nodeObj->field_place['und'][0]['tid'] == "30") {
			//this node object correspond to moumekeng taxonomy fotogallery
			$images = $nodeObj->field_portfolio_images['und'];
			foreach($images as $img) {
        $obj = Array();
        $full_img_url = file_create_url($img['uri']);
        $exploded_img_url  = explode ("/", $full_img_url);
        $img_file_name = end($exploded_img_url);
        $obj = [
          'uri' => $full_img_url,
          'file_name' => $img_file_name,
          'titolo' => $nodeObj->title
        ];
				$imgArr[] = $obj;
			}
      $imgDetails['images'] = $imgArr;
		} else { continue;}
	}  
  $index = $nodeObj->nid;
  $moumekeng_fotos[$index][] =  $imgDetails;
  }
  /*
  print("<pre>");
  var_dump($moumekeng_fotos);
  print("</pre>");
  die();  
*/
?>
<!-- ### start of the gallery definition ### -->
  <div id="nanogallery2" data-nanogallery2 = '{ 
      "galleryDisplayMode": "moreButton",
      "galleryMaxRows": 10,
      "galleryMaxItems": 40,
      "thumbnailWidth":   "300 XS180 SM200",
  	  "thumbnailHeight": "300 XS200 SM200" ,
      "thumbnailAlignment": "center",
      "thumbnailBorderHorizontal": 0, 
      "thumbnailBorderVertical": 0,
      "thumbnailGutterWidth" : "80 XS20 SM20" , 
      "thumbnailGutterHeight" : "80 XS20 SM20",
      "thumbnailLabel": { 
        "display": true, 
        "position": "onBottom", 
        "align": "center"
      },
      "thumbnailToolbarImage" :  { 
        "bottomLeft" : "display" 
      },  
      "galleryDisplayTransition": "slideUp",
      "galleryDisplayTransitionDuration": 1000,
      "thumbnailDisplayTransition": "scaleDown",
      "thumbnailDisplayTransitionDuration": 300,
      "thumbnailDisplayInterval": 50,
      "thumbnailBuildInit2" : "tools_font-size_0.9em|title_font-size_0.9em",
      "thumbnailHoverEffect2" : "image_scale_1.00_1.20_1000",
      "touchAnimation": true,
      "touchAutoOpenDelay": 800,
      "galleryTheme" : { 
        "thumbnail": { 
          "borderRadius": "10px", 
          "background": "#fff", 
          "titleShadow" : "none", 
          "titleColor": "#000", 
          "labelBackground": "#F2B12E"
         },
        "thumbnailIcon": { 
          "color": "#fff", 
          "shadow": "white" }
      }
    }'
  >
  <?php $count = count($moumekeng_fotos); 
    if($count > 0) {
  ?>
    <?php 
    $contatoreid = 1;
    foreach($moumekeng_fotos as $key=>$album) {
    ?>
      <?php foreach($album[0]['images'] as $keyalb => $foto) {
        if($keyalb == 0) {
        ?>
        <a href=""  data-ngkind="album"  data-ngid="<?php echo $key; ?>"  data-ngthumb="<?php echo $foto['uri']; ?>" > <?php echo $foto['titolo']; ?></a>
        <a href="<?php echo $foto['uri']; ?>"   data-ngid="<?php echo $contatoreid;  $contatoreid++;?>" data-ngalbumid="<?php echo $key; ?>" data-ngthumb="<?php echo $foto['uri']; ?>" > <?php //echo $foto['titolo']; ?></a>
        <?php
        } else {
         ?>
        <a href="<?php echo $foto['uri']; ?>" data-ngid="<?php echo $contatoreid;  $contatoreid++;?>" data-ngalbumid="<?php echo $key; ?>" data-ngthumb="<?php echo $foto['uri']; ?>" > <?php //echo $foto['titolo']; ?></a>
      <?php
        } // end else
     }// end foreach album ?>
      
    <?php 
      }  // end foreach
    ?>
  </div>
  <?php
    }// enf if 
  ?>

</div>  

  