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



// Iterate over each row
for ($row = 2; $row <= $highestRow; $row++) {


   // Read cell values
   $codFace = $worksheet->getCell('A' . $row)->getValue();
   $valueFace = $worksheet->getCell('H' . $row)->getValue();
   
   // echo $codFace . " ========" .$valueFace ."<br>";

   print_r("UPDATE facevalor set j81_valorterreno = $valueFace where j81_anousu = 2023 and j81_face in ($codFace);");

   echo "<br>";
  

}