<?php
// file: application/controllers/update_no_lot_data.php

include 'database_connection.php'; // Pastikan Anda memiliki koneksi database

$idkpp = $_POST['idkpp'];
$sisa_pack = $_POST['sisa_pack'];

$query = "UPDATE table_no_lot SET sisa_pack = ? WHERE idkpp = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("is", $sisa_pack, $idkpp);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}

$stmt->close();
$conn->close();
?> 