<?php
/* vinigomescunha at gmail.com */
/* example writing xml with XmlWritter */
$data = ['url' => 'data.xml'];//create array and add url as param 
$data['websites'] = [
	['name' => 'http://www.github.io', 'status' => 'opened'],
	['name' => 'http://www.github.com', 'status' => 'review'],
	['name' => 'http://www.example.com', 'status' => 'closed'],
	['name' => 'http://www.mywebsite.com', 'status' => 'closed'],
	['name' => 'http://www.github.xyz', 'status' => 'N/A'],
];
/* example writing xml with XMLWriter */
$writer = new XMLWriter();
$writer->openUri( $data['url'] ); //open xml 

$writer->setIndentString('  ');
$writer->setIndent(true);

$writer->startDocument( '1.0', 'UTF-8' );
$writer->startElement('websites');

$writer->writeElement('last_update', date('Y-m-d H:i:s'));
foreach($data['websites'] as $k => $v) {
    $writer->startElement('website'); /* start website */
    $writer->writeAttribute('sequence', $k);
    $writer->writeAttribute('name', $v['name'] );
    $writer->writeAttribute('status', $v['status'] );
    $writer->writeElement('globalStatus', 'updated');
    $writer->writeElement('version', '1.0');
    $writer->endElement();   /* end website */
}
$writer->flush();
$writer->endElement();  /* end websites */
$writer->endDocument();

/* example reading xml attributes with XMLReader */
$xml = new XMLReader();
$xml->open( $data['url'] );//open xml 

while( $xml->read() ) {
    if( 'website' === $xml->name ) {
        printf( '<hr>%3$s is the %1$s from sequence: %2$d the status is %4$s<br>', 
            $xml->name, $xml->getAttribute('sequence'), $xml->getAttribute('name'), $xml->getAttribute('status'));
        $xml->next();
    }
}

