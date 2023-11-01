<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

//require_once "./conn.php";

//$xlsxFile = 'path/to/your/file.xlsx';
$xlsxFile = 'faces.xlsx';

// Load the XLSX file
$spreadsheet = IOFactory::load($xlsxFile);

// Select the first worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Get the highest row and column indexes
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();


$allData = [];
$specificData = [];

for ($row = 2; $row <= $highestRow; $row++) {

   $codFace = $worksheet->getCell('A' . $row)->getValue();
   $valueFace = $worksheet->getCell('H' . $row)->getValue();

   $specificData = [
      "$codFace" => $valueFace
   ];
   array_push($allData, $specificData);
}


function cleanData($array, float $valorFace): array
{

   $arrayTemp = [];

   foreach ($array as $value) {

      foreach ($value as $key => $val) {

         if ($val == $valorFace) {
            //print_r($key ." >>> Function 1 >>>>>> ". $val );
            //echo "<br>";
            array_push($arrayTemp, [$key => $val]);
         }
      }
   }
   return $arrayTemp;

}

$data0 = cleanData($allData, 79.80);
$data1 = cleanData($allData, 98.57);
$data2 = cleanData($allData, 113.0405);
$data3 = cleanData($allData, 365.39);
$data4 = cleanData($allData, 104.7755);
$data5 = cleanData($allData, 166.5825);
$data6 = cleanData($allData, 109.38);
$data7 = cleanData($allData, 57);
$data8 = cleanData($allData, 96.4535);
$data9 = cleanData($allData, 74.41);


function cleanSpecifcArray($array)
{

   $arrayTemp = [];

   foreach ($array as $value) {

      foreach ($value as $key => $val) {
         array_push($arrayTemp, $key);

         $faceValue = $val;
      }

   }

   $arrayTrated = array_unique($arrayTemp);
   echo "<pre>";
   // print_r($arrayTrated);

   $stringCodeFaces = '';

   foreach ($arrayTrated as $value) {
      $stringCodeFaces = $stringCodeFaces . $value . ',';
   }

   $stringCodeFacesFinal = rtrim($stringCodeFaces, ',');

   $codeSqlUpdateString = " UPDATE facevalor SET j81_valorterreno = $faceValue WHERE j81_anousu = 2023 AND j81_face IN ($stringCodeFacesFinal);";

   echo $codeSqlUpdateString;

}

cleanSpecifcArray($data0);
cleanSpecifcArray($data1);
cleanSpecifcArray($data2);
cleanSpecifcArray($data3);
cleanSpecifcArray($data4);
cleanSpecifcArray($data5);
cleanSpecifcArray($data6);
cleanSpecifcArray($data7);
cleanSpecifcArray($data8);
cleanSpecifcArray($data9);

