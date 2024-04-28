<?php
  $input = "Total pembelian baju dinas sebesar Rp.757.000";
  
  preg_match('/Rp\.(\d+(?:\.\d+)*)/', $input, $matches);
  
  $nilai = (int) str_replace('.', '', $matches[1]);

  echo "a. " . number_format($nilai, 0, ",", ".") . "\n";
  echo "b. " . $nilai;
?>
