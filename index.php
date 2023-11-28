<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

//require_once "./conn.php";

//$xlsxFile = 'path/to/your/file.xlsx';
$xlsxFile = 'usarEssa.xlsx';

// Load the XLSX file
$spreadsheet = IOFactory::load($xlsxFile);

// Select the first worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Get the highest row and column indexes
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();


$allNumpres = [];

for ($row = 2; $row <= $highestRow; $row++) {

   $numpre = $worksheet->getCell('C' . $row)->getValue();
   $numpar = $worksheet->getCell('D' . $row)->getValue();
   $valorCorrigido = $worksheet->getCell('K' . $row)->getValue();
   $sql001 = "insert into arrecant
	select * from arrecad where (k00_numpre, k00_numpar) = ($numpre, $numpar);";

    echo "<pre>";


   // array_push($allNumpres, $numpre);

   //*********************passo 1 *******************
   //print_r($sql001);

   //******************** passo 2 **************************

    $sql002 = "insert into arrepaga
	 		select k00_numcgm,k00_dtoper, 206, 101, $valorCorrigido ,k00_dtvenc,k00_numpre,k00_numpar,k00_numtot,k00_numdig,0 , '2022-05-03' from arrecad where (k00_numpre, k00_numpar) = ($numpre, $numpar);";


        //print_r($sql002);

       $sql003 = "delete from arrecad where (k00_numpre, k00_numpar) = ($numpre, $numpar);";

    print_r($sql003);
}



  



