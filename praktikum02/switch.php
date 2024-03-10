<?php
$grade = "A";

$predikat;
switch ($grade) {
    case "A":
        $predikat = "Sangat Baik";
        break;
    case "B":
        $predikat = "Baik";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Wassalam";
        break;
    default:
        $predikat = "NILAI TIDAK DITEMUKAN";
        break;
}

echo "predikat :" . $predikat;
