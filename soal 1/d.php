<?php
$input = "Saya sangat suka coding       php dan       python";

$output = preg_replace('/\s+/', ' ', $input);

echo $output;
?>
