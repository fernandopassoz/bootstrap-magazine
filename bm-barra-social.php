<?php 
$facebook = 	array(	'link' => 'https://facebook.com/onlagos', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/facebook-color.png' );
$twitter = 		array(	'link' => 'http://twitter.com/onlagos', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/twitter-color.png' );
$googleplus = 	array(	'link' => 'http://plus.google.com/', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/google-plus-color.png' );	
$pinterest = 	array(	'link' => 'http://pinterest.com/', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/pinterest-color.png' );	
$youtube = 	array(	'link' => 'http://youtube.com/', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/youtube-color.png' );
$flickr = 			array(	'link' => 'http://flickr.com/', 
									'img' => content_url().'/themes/bootstrap-magazine/images/icons/flickr-color.png' );	
?>
<ul class="barra-social">
	<li><a href="<?php echo $facebook->link ?>"><img src="<?php echo $facebook->img ?>"></a></li>
	<li><a href="<?php echo $twitter->link ?>"><img src="<?php echo $twitter->img ?>"></a></li>
	<li><a href="<?php echo $googleplus->link ?>"><img src="<?php echo $googleplus->img ?>"></a></li>
	<li><a href="<?php echo $pinterest->link ?>"><img src="<?php echo $pinterest->img ?>"></a></li>
	<li><a href="<?php echo $youtube->link ?>"><img src="<?php echo $youtube->img ?>"></a></li>
	<li><a href="<?php echo $flickr->link ?>"><img src="<?php echo $flickr->img ?>"></a></li>
</ul>
