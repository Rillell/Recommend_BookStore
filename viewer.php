<?php
$PDF = $_GET['PDF'];

//$PDF='1984.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $PDF . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges:bytes');
@readfile('./book_pdf/'.$PDF);

?>