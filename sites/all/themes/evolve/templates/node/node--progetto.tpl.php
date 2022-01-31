<script>
    jQuery(document).ready(function(){
        var slider_options = Array();
        slider_options.slideWidth = 1140;
        slider_options.nextText = '<i class="fa fa-angle-right"></i>';
        slider_options.prevText = '<i class="fa fa-angle-left"></i>';
        slider_options.randomStart = false;
        slider_options.responsive = true;
        slider_options.infinite = true;
        slider_options.auto = true;
        slider_options.pause = 4000;
        slider_options.keyboardEnabled = true;
        slider_options.pager= false;

      jQuery('.slider').bxSlider(slider_options);
    });
 </script>
<div class="bodyHeader">
    <div class="bodyHeaderContent">
        <div class="bodyLeftCls">
            <p><?php print render($content['body']); ?></p>
        </div>
        <div class="bodyRightCls">
            <p><?php print render($content['field_body_right']); ?></p>
        </div>
    </div>
</div>

<div id="node-<?php print $node->nid; ?>" 	class="<?php print $classes;?> clearfix"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <?php $count = count($node->field_fotogallery_progetto["und"]); 
            if($count > 0) {
        ?>
        <div class="slider">
            <?php 
            $allFotos = $node->field_fotogallery_progetto["und"];
            foreach($allFotos as $foto) {
            ?>
                <div class="singleFotoCls"> <img src="<?php print file_create_url($foto["uri"]); ?>" /></div>
            <?php 
                }  // end foreact
            }// enf if
            ?>
        </div>
    </div>
</div> 

