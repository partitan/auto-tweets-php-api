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
//echo $tweet-> get('direct_messages', array('count' => 1,'skip_status' => 1, 'include_entities' => false));


$cxpReply = $tweet-> get('direct_messages', array('count' => 1,'skip_status' => 1, 'include_entities' => false));
	$a = json_decode($cxpReply, true);
//echo $a;
//---------->>>>>>>>>>>>>>>>>>>>>>>>>>print_r($a);
//print_r(array_keys($a));
//print_r(array_keys($a,"0");
//echo "------";// output 8
//echo count($a, COUNT_RECURSIVE);
//echo "------";// output 8

$results = trim(print_r($a, true));
//echo $results;
//echo strlen ( $results );
//echo "------/n---------/n";
    $find = "[text]";
 $find2 = "[sender]";
     
    if( strpos( $results, "[text]" )) {
     
       // echo "yes $find";
	//$cutstr = substr ( strpos( $results, "[text]" ) );
	//echo $cutstr;
	    
	$pos = strpos( $results, "[text]" );
	$pos1 =  strpos( $results, "[sender]");
if ($pos === false) {
    echo "The string was not found in the string";
} else {
    //echo "The string was found in the string";
    //echo " and exists at position $pos ----- $pos1";
	//echo "------/n---------/n";
	//echo "------/n---------/n";
	$textfound1 = substr ( $results, $pos, $pos1 );
	//echo $textfound1;
	$lentxt = strlen($textfound1);
	$pos2 = strpos( $textfound1, "[sender]");
	//echo "SENDER : $pos2";
	$msgfound = substr ( $textfound1, 0, 102 );
	echo $msgfound;
	
	
	
}
	    
	    
     
    } else {
     
        echo "no $find";
     
    }

//echo "------/n---------/n";
//echo "------/n---------/n";
//echo strlen ( "bamboolabcode" );

//echo substr ( "bamboolabcode", 0, -10 );
//echo substr ( "bamboolabcode");
//echo stristr ( "BambooLabCode", "l" );

//echo count($a); // output 2
//$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
//$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

//print_r(array_keys($a));

//$key = array_search('apple', $a); // $key = 2;
//echo $key;
//echo "------<br>";// output 8

//print_r(array_values($a));

//$key = array_search('red', $array);   // $key = 1;
//echo $key;


//print_r ($a);



//$json = '{"foo-bar": 12345}';

//$obj = json_decode($json);
//"text":"Welgum"
//print $a->{'text'}; // 12345
//print $a->{'id'};
//print $a->['id_str'];

//foreach ($a['text'] as $textx) {
    
  //     echo $textx." Following user <br>";
        
    //}
//foreach ($a as $key => $user) {
//echo "Key=" . $key . ", Value=" . $user;
//$ret = $tweet->post('friendships/create', array('user_id' => $user['id']));
//}
//echo "xxx";
