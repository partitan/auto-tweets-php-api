<?php
//Twitter API
echo "Twitter API test";

//Twitter APP
$consumerKey    = '4MTtBPsekfyeS1gGLIndqbWbC';
$consumerSecret = 'WGBrMsZacLjCp3KPGhxyvDHske0N9YS1ZZiewnaGOXVpfst04J';
$oAuthToken     = '747679427291676673-vuIY9VA4WL1e0t0kBkqL5P4uF3S4GHZ';
$oAuthSecret    = 'NUqaIFUzx5iiPkMsqlEvzhJe3hrO1JXxLQ2mwvYX36gph';

require_once('twitteroauth.php');
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);


echo $tweet->post('direct_messages/new', array('screen_name' => 'prungkrae', 'text' => 'Hell ha wrrrrrrr......'));
// New Tweet message
//echo "Messages";




//Send Message
