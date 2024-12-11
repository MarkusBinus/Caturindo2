<?php
// file: application/controllers/get_no_lot_data.php

include 'database_connection.php'; // Pastikan Anda memiliki koneksi database

$idkpp = $_GET['idkpp'];

$query = "SELECT sisa_pack FROM table_no_lot WHERE idkpp = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $idkpp);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['sisa_pack' => 0]);
}

$stmt->close();
$conn->close();
?> 