<?php
	// include the the four other files needed to test
	include 'communications.php';
	include 'createObj.php';
	include 'Obj2xml.php';
	include 'tagValue.php';

	//this class will test a litleOnline request transaction and post the response

	//Authorization Request Example
        //$ob=createObj::createAuth();
	//$type = 'authorization';

	//Sale Request Example
	//$ob=createObj::createSale();
	//$type = 'sale';

	// Token Request Example
  	//$ob=createObj::createToken()
	//$type = 'registerTokenRequest';

        // Credit/Refund Request Example
	$ob=createObj::createCredit();
	$type = 'credit';


    	$converter=new Obj2xml("litleOnlineRequest");
    	header("Content-Type:text/xml");
	$req = $converter->toXml($ob,$type);// convert object to litleOnlineRequest XML 
	
	if (!$req){
		echo "error with Litle Online Request";
	}
   	//echo $req; //display request 

       $resp = communications::httpRequest("http://l-rganmukh-ws490:2180/vap/communicator/online", $req);//do Http post
	if (!$resp){
		echo "error with Litle Online Response ";
	}
      	//echo $resp;// display litle Reponse

       $txnID= tagValue::getXmlValueByTag($resp,'litleTxnId');   //convert Resonse xml to an object and get tag value

 	echo "Transaction ID: ".$txnID;// display transaction id
	
	
?>

