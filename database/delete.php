<?php
    $data = $_POST;
    $id = (int) $data['id'];
    $table = $data['table'];

    // adding the record
try {
    $command = "DELETE FROM $table WHERE id = {$id}";
    
    include('connection.php');

    $stmt = $conn->prepare($command);
    $stmt->execute();

    echo json_encode([
        'success' => true,
    ]);
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
    ]);
}