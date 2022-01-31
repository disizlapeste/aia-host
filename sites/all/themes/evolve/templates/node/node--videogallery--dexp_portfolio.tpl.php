<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
    hide($content['comments']);
    hide($content['links']);
    //echo '<pre>'.print_r($content, 1).'</pre>';  
	?>
	<div class="videoPlayer">
      <?php print render($content['field_video']); ?>
	</div>
	<div class="title">
      <?php print render($title); ?>
	</div>
		<div class="body">
      <?php print render($content['body']); ?>
	</div>
  </div>
</div> 