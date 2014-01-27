<?php
    include_once ('tools/facebook/src/facebook.php');
/*
    //facebook application configuration
    $fbconfig['appid' ] = "178317615695630";
    $fbconfig['secret'] = "f2a7830017ce41655386bc04401d4ac1";
 
    try{
        include_once ('tools/facebook/src/facebook.php');
    }
    catch(Exception $o){
 
        print_r($o);
 
    }
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));
 
    $user       = $facebook->getUser();
    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'email'
            )
    );
 
    if ($user) {
      try {
        $user_profile = $facebook->api('/me');
        $user_friends = $facebook->api('/me/friends');
        $access_token = $facebook->getAccessToken();
      } catch (FacebookApiException $e) {
        d($e); 
        $user = null;
      }
    }
 
    if (!$user) {
        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        exit;
    }
 
    $total_friends = count($user_friends['data']);
    echo 'Total friends: '.$total_friends.'.<br />';
    $start = 0;
    while ($start < $total_friends) {
        echo $user_friends['data'][$start]['name'];
        echo '<br />';
        $start++;
    }*/
    $facebook = new Facebook(array(  
        'appId'  => '178317615695630',  
        'secret' => 'f2a7830017ce41655386bc04401d4ac1',  
        'cookie' => true,  
    ));  
    $result = $facebook->api(array(  
        'method' => 'fql.query',  
        'query' => 'select fan_count from page where page_id = 210387789060992;'  
    ));  
    
    $fb_fans = $result[0]['fan_count']; 
    echo $fb_fans;
?>