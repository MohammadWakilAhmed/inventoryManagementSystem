<?php
    $data = $_POST;
    $id = (int) $data['id'];
    $table = $data['table'];

    // adding the record
try {
    include('connection.php');

    //delete junction table
    if ($table === 'suppliers'){
        $supplier_id = $id;
        $command = "DELETE FROM productsuppliers WHERE supplier= {$id}";
        $stmt = $conn->prepare($command);
        $stmt->execute();

    }

    if ($table === 'products'){
        $supplier_id = $id;
        $command = "DELETE FROM productsuppliers WHERE product= {$id}";
        $stmt = $conn->prepare($command);
        $stmt->execute();

    }

    $command = "DELETE FROM $table WHERE id = {$id}";
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