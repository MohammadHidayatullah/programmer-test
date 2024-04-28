<?php
$input = "Kd brg=7328482, NmBrg=Buavita Jambu, HrBrg:8.500, QtyBrg=2, TtlBayar:17.000";

$data = explode(", ", $input);

$Kd_Brg = "";
$NmBrg = "";
$HrBrg = "";
$QtyBrg = "";
$TtlBayar = "";

foreach ($data as $item) {
    if (strpos($item, "=") !== false) {
        $pair = explode("=", $item);
    } elseif (strpos($item, ":") !== false) {
        $pair = explode(":", $item);
    } else {
        continue;
    }

    $value = trim($pair[1]);

    switch ($pair[0]) {
        case 'Kd brg':
            $Kd_Brg = (int)$value;
            break;
        case 'NmBrg':
            $NmBrg = $value;
            break;
        case 'HrBrg':
            $HrBrg = $value;
            break;
        case 'QtyBrg':
            $QtyBrg = (int)$value;
            break;
        case 'TtlBayar':
            $TtlBayar = $value;
            break;
        default:
            break;
    }
}

// Menampilkan hasil
echo "\$Kd_Brg = $Kd_Brg;\n";
echo "\$NmBrg = $NmBrg;\n";
echo "\$HrBrg = $HrBrg;\n";
echo "\$QtyBrg = $QtyBrg;\n";
echo "\$TtlBayar = $TtlBayar;";
?>
