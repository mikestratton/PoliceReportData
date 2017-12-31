<?php

include 'pdfparser/vendor/autoload.php';

// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('test.pdf');

$text = $pdf->getText();
echo $text;

?>
