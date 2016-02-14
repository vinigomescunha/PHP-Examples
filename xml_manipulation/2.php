<?php
header('Content-type: text/xml;');
$doc = new XMLWriter();
$doc->openURI('php://output'); 
$doc->startDocument('1.0'); 
$doc->setIndent(4);   
$doc->startElement('list'); 
for($r=0;$r<10; $r++){
    $doc->startElement('categories');
	$doc->writeAttribute( 'id', 'category-' .$i );
    for($i=0;$i<5; $i++){
        $doc->startElement('item');  
        $doc->writeAttribute( 'id', $r . '-' . $i );
        $doc->endElement();
    }
    $doc->endElement();
}
$doc->endElement();  
$doc->endDocument();   
$doc->flush();
