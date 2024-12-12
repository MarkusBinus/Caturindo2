<?php

// file:  process-import-data.php
$seq 				= $data[0]; 
$shipping_location_code = $data[1]; 
$shipping_location_name = $data[2];  

$delivery_due_date 	= $data[3]; 
$delivery_time_from = $data[4]; 
$delivery_time_to	= $data[5]; 
$item_number 		= $data[6]; 
$item_name 			= $data[7]; 

$supplier_code		= $data[8]; 
$supplier_name		= $data[9];

$user_code 			= $data[10]; 
$user_name 			= $data[11];

$p_f  				= $data[12];
$p_f_name			= $data[13];

$order_number 		= $data[14]; 
$order_quantity 	= $data[15]; 
$unit 				= $data[16]; 

$production_classification = $data[17];
$color				= $data[18];
$item_class			= $data[19];
$packing_name		= $data[20];
$packing_capacity	= $data[21];
$pickup				= $data[22];

$delivery_slip_no	= $data[23];
$delivery_slip_receipt_print_date = $data[24];
$inspection_print_date 	= $data[25];
$item_card_print_date 	= $data[26];
$original_item_code		= $data[27];
$supplier_information	= $data[28];
$output_date 			= $data[29];

$db_servername  = "(local)";
$db_dbname		= "produksi";


$data_config = array(
	"Database"  => $db_dbname
);

$koneksi = sqlsrv_connect($db_servername, $data_config);

if($koneksi === false){
	$error = sqlsrv_errors();
    echo "Unable to connect: " . $error[0]['message'] . "</br>";
    die();
}

$query = "INSERT INTO produksi.dbo.table_delivery 
	(seq,
	shipping_location_code,
	shipping_location_name,
	delivery_due_date,
	delivery_time_from,
	delivery_time_to,
	item_number,
	item_name,
	supplier_code,
	supplier_name,
	user_code,
	user_name,
	p_f,
	p_f_name,
	order_number,
	order_quantity,
	unit,
	production_classification,
	color,
	item_class,
	packing_name,
	packing_capacity,
	pickup,
	delivery_slip_no,
	delivery_slip_receipt_print_date,
	inspection_print_date,
	item_card_print_date,
	original_item_code,
	supplier_information,
	output_date
) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$params = array(
	$seq,
	$shipping_location_code,
	$shipping_location_name,
	$delivery_due_date,
	$delivery_time_from,
	$delivery_time_to,
	$item_number,
	$item_name,
	$supplier_code,
	$supplier_name,
	$user_code,
	$user_name,
	$p_f,
	$p_f_name,
	$order_number,
	$order_quantity,
	$unit,
	$production_classification,
	$color,
	$item_class,
	$packing_name,
	$packing_capacity,
	$pickup,
	$delivery_slip_no,
	$delivery_slip_receipt_print_date,
	$inspection_print_date,
	$item_card_print_date,
	$original_item_code,
	$supplier_information,
	$output_date
);	

// eksekusi query
$stmt 	= sqlsrv_prepare($koneksi, $query, $params);

if($stmt === false){
	$error = sqlsrv_errors();
    echo "Query error: " . $error[0]['message'] . "</br>";
    die();
}

if(sqlsrv_execute($stmt) === false){
    $error = sqlsrv_errors();
    echo "Query execution error: " . $error[0]['message'] . "</br>";
    die();
}

sqlsrv_free_stmt($stmt);  
sqlsrv_close($koneksi);

echo " berhasil! <br>";

echo "<script>
	window.location.href = '/import_data';
</script>";


?>