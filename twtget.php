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
//echo $tweet-> get('direct_messages', array('count' => 1));


$cxpReply = $tweet-> get('direct_messages', array('count' => 1));
	$a = json_decode($cxpReply, true);
//echo $cxpReply
	//print_r($a);
print_r(array_keys($a));
print_r(array_keys($a,"0"));

echo $a[0][0].": In stock: ".$a[0][1].", sold: ".$a[0][2].".<br>";
echo $a[1][0].": In stock: ".$a[1][1].", sold: ".$a[1][2].".<br>";
echo $a[2][0].": In stock: ".$a[2][1].", sold: ".$a[2][2].".<br>";
echo $a[3][0].": In stock: ".$a[3][1].", sold: ".$a[3][2].".<br>";
//foreach ($a as $key => $user) {
//echo "Key=" . $key . ", Value=" . $user;
//$ret = $tweet->post('friendships/create', array('user_id' => $user['id']));
//}

