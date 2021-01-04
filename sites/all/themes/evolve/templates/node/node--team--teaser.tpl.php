<div id="node-<?php print $node->nid; ?>" 
	class="<?php print $classes;
	if(isset($node->field_ruolo['und'][0])){
	$term =  taxonomy_term_load($node->field_ruolo['und'][0]['tid']);
	print(' '.$term->name);
 ?> clearfix"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <?php
// We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
		}
        print('</pre>');
		?>                
        <div class="team">
            <div class="team-item img-wrp"><?php print render($content['field_team_image']); ?>
                <div class="overlay"></div>
                <div class="overlay-wrp">                                        
                    <ul class="social-icons overlay-content">
					<!--- new --->
					<?php 
					$facebook = (!empty($content['field_team_facebook_link'])) ? render($content['field_team_facebook_link'][0]) : 'https://www.facebook.com/Associazione-Ingegneri-Africani-372666199758937/';
					$twitter = (!empty($content['field_team_twitter_link'])) ? render($content['field_team_twitter_link'][0]) : 'https://twitter.com/IngAfricani';
					$linkedin = (!empty($content['field_team_linkedin_link'])) ? render($content['field_team_linkedin_link'][0]) : 'https://www.linkedin.com/company/11176580/';
					?>
                    <li><a class="facebook" href="<?php print $facebook;?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="<?php print $twitter;?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="<?php print $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>		
		<!--- end new --->
                    </ul>
                </div>
            </div>
            <div class="team-item team-member-info-wrp">
            <div class="team-name">
                <h5><?php print $title; ?></h5>
                <span><?php print render($content['field_team_position']); ?></span>
            </div>
            <div class="team-about">
                <p><?php print render($content['body']); ?></p>
				<div class="socialsresponsivecls">
				    <ul class="social-icons">
                    <li><a class="facebook" href="<?php print $facebook;?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="<?php print $twitter;?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="<?php print $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>	
                    </ul>
				</div>
            </div>
            <div class="team-email"><a href="#"><i class="icon-envelope"></i> <?php print render($content['field_team_email']); ?> </a></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div> 
