<?php

	// Create Specific XML object using the general XML object class 
	// set values here for fields

class createObj{
	

	function createAuth(){
	
	include 'genXmlObj.php';
    	$ob->$authenticationField[0]->$authenticationField[1]="XMLTESTV3";
    	$ob->$authenticationField[0]->$authenticationField[2]="password";
	$ob->$authorizationField[0]->$authorizationField[1]="65347567";
	$ob->$authorizationField[0]->$authorizationField[2]="40000";
	$ob->$authorizationField[0]->$authorizationField[3]="ecommerce";
	$ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[1]="Bill Bob";
	$ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[2]="100 main st.";
	$ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[3]="Carlisle";
	$ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[4]="MA";
	$ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[5]="01741";
        $ob->$authorizationField[0]->$billToAddressField[0]->$billToAddressField[6]="US";
	$ob->$authorizationField[0]->$cardField[0]->$cardField[1]="VI";
	$ob->$authorizationField[0]->$cardField[0]->$cardField[2]="4326000000004321";
	$ob->$authorizationField[0]->$cardField[0]->$cardField[3]="1211";
	$ob->$authorizationField[0]->$cardField[0]->$cardField[4]="5665";
        return $ob;
	}


	function createSale(){

	include 'genXmlObj.php';
    	$ob->$authenticationField[0]->$authenticationField[1]="XMLTESTV3";
    	$ob->$authenticationField[0]->$authenticationField[2]="password";
	$ob->$saleField[0]->$authorizationField[1]="65347567";
	$ob->$saleField[0]->$authorizationField[2]="40000";
	$ob->$saleField[0]->$authorizationField[3]="ecommerce";
	$ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[1]="Bill Bob";
	$ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[2]="100 main st.";
	$ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[3]="Carlisle";
	$ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[4]="MA";
	$ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[5]="01741";
        $ob->$saleField[0]->$billToAddressField[0]->$billToAddressField[6]="US";
	$ob->$saleField[0]->$cardField[0]->$cardField[1]="VI";
	$ob->$saleField[0]->$cardField[0]->$cardField[2]="4326000000004321";
	$ob->$saleField[0]->$cardField[0]->$cardField[3]="1211";
	$ob->$saleField[0]->$cardField[0]->$cardField[4]="5665";
        return $ob;
	}


	function createToken(){

	include 'genXmlObj.php';
    	$ob->$authenticationField[0]->$authenticationField[1]="XMLTESTV3";
    	$ob->$authenticationField[0]->$authenticationField[2]="password";
	$ob->$tokenField[0]->$tokenField[1]="F1234";
	$ob->$tokenField[0]->$tokenField[2]="4005101001000002";		
        return $ob;
 
	}


	function createCredit(){

	include 'genXmlObj.php';
    	$ob->$authenticationField[0]->$authenticationField[1]="XMLTESTV3";
    	$ob->$authenticationField[0]->$authenticationField[2]="password";
	$ob->$creditField[0]->$creditField[1]="123456789";
        return $ob;
 
	}
}
?>
