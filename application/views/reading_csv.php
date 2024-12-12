<?php

$file = $_FILES['data-delivery'];
$fileName = $file['name'];
$fileTemp = $file['tmp_name'];

$lokasi = "uploads/data-mrp/";

$lokasiTarget = $lokasi . str_replace(".txt", ".csv", $fileName);
move_uploaded_file($fileTemp, $lokasiTarget);


function textToDate($data_string){

$y = substr($data_string, -2);
$f = '20' . $y;
$tgl = substr($data_string, 0, -2) . $f;
return $tgl;

}

function read_csv(string $path_to_csv_file, array &$result): bool{
    $handle = fopen($path_to_csv_file, 'r');
    
    if(!$handle){
       return false;
    }

    while(false !== ($data = fgetcsv($handle, null, ','))){
       $result[] = $data;
    }
    
    return true;
}

$response = [];
if(!read_csv($lokasiTarget, $response)){
   echo "CSV file could not be opened.";
}

foreach($response as $row_number => $data){

	if($row_number == 0)
		continue;

   echo $data[0] . "\t" .$data[1] . " " .$data[2] .
   " " .$data[3]  . " " .$data[4] . " " .$data[5] . " " .$data[6] . 
   " " .$data[7] . " " .$data[8] . " " .$data[9] . 
   " " .$data[10]  . " " .$data[11] . " " .$data[12] . " " .$data[13] . 
   " " .$data[14]  . " " .$data[15] . " " .$data[16] . " " .$data[17] . 
   " " .$data[18]  . " " .$data[19] . " " .$data[20] . " " .$data[21] .
   " " .$data[22]  . " " .$data[23] . " " .$data[24] . " " .$data[25] . 
   " " .$data[26]  . " " .$data[27] . " " .$data[28] . " " .$data[29];

   //echo "<br><hr><br>";

   include('process-import-data.php');


}



?>