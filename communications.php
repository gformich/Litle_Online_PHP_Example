<?php
	// this class contains the method to send an http post and retrieve the response
	// this method does not use the built in cURL field for PHP
	// output = response, inputs = url and post
        // sends an http request not an https(secure) request [ by Litle]  

class communications{

	function httpRequest($url, $data)
	{
  	  $post = array('http' => array('method' => 'POST','content' => $data));
	  $ctx = stream_context_create($post);
	  $fp = @fopen($url, 'rb', false, $ctx);

	 //Error Handling: 
	 	 if (!$fp) {throw new Exception("Problem with $url, $php_errormsg");}
 	 	 $response = @stream_get_contents($fp);
		 if ($response === false) {throw new Exception("Problem reading data from $url, $php_errormsg");}
 	 	 return $response;
	}
}

?>
