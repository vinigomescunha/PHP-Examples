<?php 
header('Content-type: xml; charset=UTF-8;');
@date_default_timezone_set("GMT"); 

$writer = new XMLWriter(); 

$writer->openURI('php://output'); 
$writer->startDocument('1.0'); 

$writer->setIndent(4); 

$writer->startElement('rss'); 
$writer->writeAttribute('version', '2.0'); 
$writer->writeAttribute('xmlns:atom', 'http://www.w3.org/2005/Atom'); 

$writer->startElement("channel"); 
//---------------------------------------------------- 
$writer->writeElement('title', 'Latest Products'); 
$writer->writeElement('description', 'This is the latest products from our website.'); 
$writer->writeElement('link', 'http://www.domain.com/link.htm'); 
$writer->writeElement('pubDate', date("D, d M Y H:i:s e")); 
    $writer->startElement('image'); 
        $writer->writeElement('title', 'Latest Products'); 
        $writer->writeElement('link', 'http://www.domain.com/lastest.html'); 
        $writer->writeElement('url', 'https://www.domain.com/category/2334/icon.png'); 
        $writer->writeElement('width', '120'); 
        $writer->writeElement('height', '60'); 
    $writer->endElement(); 
//---------------------------------------------------- 
//---------------------------------------------------- 
$writer->startElement("item"); 
$writer->writeElement('title', 'New Product 1'); 
$writer->writeElement('link', 'http://www.example.com/'); 
$writer->writeElement('description', 'This is a Description!'); 
$writer->writeElement('guid', 'http://www.example.com/link.cgi?tiem=3210'); 

$writer->writeElement('pubDate', date("D, d M Y H:i:s e")); 

$writer->startElement('category'); 
    $writer->writeAttribute('domain', 'http://www.example.com/link.html'); 
    $writer->text('Example Products'); 
$writer->endElement(); // Category 

// End Item 
$writer->endElement(); 
//---------------------------------------------------- 
// End channel 
$writer->endElement(); 
// End rss 
$writer->endElement(); 

$writer->endDocument(); 

$writer->flush(); 
?>
