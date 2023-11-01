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

// $count = 0;


$allData = [];

$all79 = [];
$all98 = [];
$all113 = [];
$all365 = [];
$all104 = [];
$all166 = [];
$all109 = [];
$all96 = [];
$all57 = [];
$all74 = [];



// Iterate over each row
for ($row = 2; $row <= $highestRow; $row++) {

   // Read cell values
   $codFace = $worksheet->getCell('A' . $row)->getValue();
   $valueFace = $worksheet->getCell('H' . $row)->getValue();

   if($valueFace == 79.8){
      array_push($all79, $codFace);
   
   }

   if ($valueFace == 98.57) {
      array_push($all98, $codFace);

   }

   if ($valueFace == 113.0405) {
      array_push($all113, $codFace);

   }

   if ($valueFace == 365.39) {
      array_push($all365, $codFace);

   }

   if ($valueFace == 104.7755) {
      array_push($all104, $codFace);

   }

   if ($valueFace == 166.5825) {
      array_push($all166, $codFace);

   }

   if ($valueFace == 109.38) {
      array_push($all109, $codFace);

   }

   if ($valueFace == 96.4535) {
      array_push($all96, $codFace);

   }

   if ($valueFace == 57) {
      array_push($all57, $codFace);

   }

   if ($valueFace == 74.41) {
      array_push($all74, $codFace);

   }

   // Código pronto já praticamente

   //echo "<pre>";
   
   // print_r("UPDATE facevalor set j81_valorterreno = $valueFace where j81_anousu = 2023 and j81_face in ($codFace);");
   
}

$all79unique = array_unique($all79);

$text79 = '';

foreach($all79unique as $value){

   $text79 = $text79 . ' '. $value . ',';

}


$all98unique = array_unique($all98);

$text98 = '';

foreach ($all98unique as $value) {

   $text98 = $text98 . ' ' . $value . ',';

}


$all113unique = array_unique($all113);

$text113 = '';

foreach ($all113unique as $value) {

   $text113 = $text113 . ' ' . $value . ',';

}

$all365unique = array_unique($all365);

$text365 = '';

foreach ($all365unique as $value) {

   $text365 = $text365 . ' ' . $value . ',';

}

$all104unique = array_unique($all104);

$text104 = '';

foreach ($all104unique as $value) {

   $text104 = $text104 . ' ' . $value . ',';

}

$all166unique = array_unique($all166);

$text166 = '';

foreach ($all166unique as $value) {

   $text166 = $text166 . ' ' . $value . ',';

}

$all109unique = array_unique($all109);

$text109 = '';

foreach ($all109unique as $value) {

   $text109 = $text109 . ' ' . $value . ',';

}

$all96unique = array_unique($all96);

$text96 = '';

foreach ($all96unique as $value) {

   $text96 = $text96 . ' ' . $value . ',';

}

$all57unique = array_unique($all57);

$text57 = '';

foreach ($all57unique as $value) {

   $text57 = $text57 . ' ' . $value . ',';

}


$all74unique = array_unique($all74);

$text74 = '';

foreach ($all74unique as $value) {

   $text74 = $text74 . ' ' . $value . ',';

}



print_r("UPDATE facevalor set j81_valorterreno = 79.8 where j81_anousu = 2023 and j81_face in ($text79);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 98.57 where j81_anousu = 2023 and j81_face in ($text98);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 113.0405 where j81_anousu = 2023 and j81_face in ($text113);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 365.39 where j81_anousu = 2023 and j81_face in ($text365);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 104.7755 where j81_anousu = 2023 and j81_face in ($text104);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 166.5825 where j81_anousu = 2023 and j81_face in ($text166);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 109.38 where j81_anousu = 2023 and j81_face in ($text109);");

echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 96.4535 where j81_anousu = 2023 and j81_face in ($text96);");


echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 57 where j81_anousu = 2023 and j81_face in ($text57);");


echo "<br>";
echo "<br>";

print_r("UPDATE facevalor set j81_valorterreno = 74.41 where j81_anousu = 2023 and j81_face in ($text74);");






