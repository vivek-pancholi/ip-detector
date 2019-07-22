<?php

//Please Ensure that Internet is working currently.
$user_agent=$_SERVER['HTTP_USER_AGENT'];

//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
{
	
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
	
	//$ip_address = var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['HTTP_CLIENT_IP'])));
	
	echo "<div class=''><strong>
	Your IP address is:
	$ip_address
	</strong></div>";
	
	
	
	echo "<br/>";
	
	echo "<div class=''><strong>
	Your current browser is :$user_agent
	</strong></div>";
	
	
	
  }
  
//whether ip is from proxy
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
	  
    $ip_address_2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
	
	//$ip_address_2 =  var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['HTTP_X_FORWARDED_FOR'])));
	
	
	
	echo "<div class=''><strong>
	Your IP address is: 
	$ip_address_2
	</strong></div>";
	
	
	
	echo "<br/>";
	
	echo "<div class=''><strong>
	Your current browser is :$user_agent
	</strong></div>";
	
	
	
  }
  
//whether ip is from remote address
else
  {
	  
    $ip_address_3 = $_SERVER['REMOTE_ADDR'];
	
	//$ip_address_3 = var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
	
	
	echo "<div class=''><strong>
	Your IP address is:
	$ip_address_3
	</strong></div>";
	
	
	
	echo "<br/>";
	
	echo "<div class=''><strong>
	Your current browser is :$user_agent
	</strong></div>";
	
	
  }
 
?>
