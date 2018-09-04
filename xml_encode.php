<?php
/**
* xml_encode()
*
* This function coverts an array into an XML element.
*
*@author Davi Duarte <daviduartedf@gmail.com>
*/

function xml_encode(array $array, $filename = '', &$xml_obj = null){
	if($xml_obj === null){
		$xml_obj = new SimpleXMLElement('<data/>');
	}
	foreach($array as $key => $value){
		if(is_numeric($key)){
			$key = 'item'.$key;
		}
		if(is_array($value)){
			$subtag = $xml_obj->addChild($key);
			xml_encode($value, $filename, $subtag);
		}else{
			$xml_obj->addChild($key, htmlspecialchars($value));
			if(!empty($filename)){
				file_put_contents('./'.$filename.'.xml', $xml_obj->asXML());
			}
		}
	}

	return $xml_obj;
}