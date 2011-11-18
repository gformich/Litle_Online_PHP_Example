<?php
	//this file defines all of the fields for differernt types of trasactions
    	//the fields are stored as strings and grouped by parent/child field classes
    	// the group of strings is then stored into an array which will later be used to define the xml
  	$authenticationField =array('authentication','user','password');
    $authorizationField =array( 'authorization', 'orderId','amount','orderSource');
	$saleField = array('sale','ltl');
    $billToAddressField =array('billToAddress', 'name', 'addressLine1','city', 'state', 'zip','country');
    $cardField =array('card','type','number','expDate','cardValidationNum');
	$tokenField = array('registerTokenRequest','orderId','accountNumber');
	$creditField =array('credit', 'litleTxnId'); 
?>
