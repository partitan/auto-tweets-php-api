<?php
//Twitter API
//echo "Twitter API test";
//Twitter APP
$consumerKey    = 'LwjDAci8dZKpho1QhnV2PF6DN';
$consumerSecret = 'TCWqkK073gt4grLCUilslRmS5NRoHvYJUMQuiCPIu6FNfMHzBC';
$oAuthToken     = '802168980853006336-Xj52cmzoQvIUQLVXqvaebyCVwiqEamK';
$oAuthSecret    = 'xXgODYhqMiljgooADDQHDyAjeIrwcVo00gzzs48aezDFi';
require_once('twitteroauth.php');
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
//$tweet->post('direct_messages/new', array('screen_name' => 'prungkrae', 'text' => 'welcome message from Proxy'));
//$tweet->post('direct_messages/new', array('screen_name' => 'prungkrae', 'text' => 'welcome message from Proxy : timestamp',time()));
// New Tweet message


//echo $tweet->get('followers/ids', array('screen_name' => 'prungkrae', 'count'=> 5000));
$tweet->get('direct_messages', array('count' => 1));
$cpontent = $tweet->get('direct_messages', array('count' => 1));
//echo $tweet->get('statuses/show', array('id' => '240136858829479936'));
echo $content,
//sleep(2);

//statuses/show



//echo " OK !!!";
