<?php
$count = 0;

for ($i = 1; $i <= 100; $i++) {
    $numberAsString = (string) $i;
    
    $count += substr_count($numberAsString, '8');
}

echo "Angka 8 muncul sebanyak $count kali dari 1 sampai 100.";
?>
