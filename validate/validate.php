<?php
 $xml = new DOMDocument();
 $xml -> load ('dtd1.xml');
 if($xml -> validate()){
    echo "valid xml";
 }
 else{
    echo "invalid xml";
 }
?>