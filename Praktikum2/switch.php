<?php 
//bkin variabel nilai abcde
$grade = "A";
//bikin predikat
$predikat;

//bikin percabangan
switch($grade) {
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
        $predikat ="Nilai Tidak Di Temukan";
        break; 
}

echo "Predikat :" . $predikat


?>