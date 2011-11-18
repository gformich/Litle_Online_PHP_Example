<?php

	// this class contains the method to create an xml document from an object
	
class Obj2xml {

	  var $xmlResult;  
	  // construct function creates the basic XML doc with attributes added
  	  function __construct($rootNode){
 	       $this->xmlResult = new SimpleXMLElement("<$rootNode></$rootNode>");
	       $this->xmlResult-> addAttribute('version','8.8');
	       $this->xmlResult-> addAttribute('merchantId','000052');
  	       $this->xmlResult-> addAttribute('xmlns:xmlns','http://www.litle.com/schema');// does not show up on browser docs
 	   }
	 //iterates through child classes and adds into xml document
 	  private function iteratechildren($object,$xml){
 	       foreach ($object as $name=>$value) {
  	          if (is_string($value) || is_numeric($value)) {
  	              $xml->$name=$value;       
   	         }else {
     	           $xml->$name=null;
     	          $this->iteratechildren($value,$xml->$name);
      	      }
      	  }
   	 }
 	//changes the object to xml doc, calls previous two functions 
  	 function toXml($object,$type) { 
  	      $this->iteratechildren($object,$this->xmlResult);   
  	      $this->xmlResult->$type-> addAttribute('reportGroup','ABCD');  // add this attribute for authorization transaction 
   	      return $this->xmlResult->asXML();
  	 }
}

?>
