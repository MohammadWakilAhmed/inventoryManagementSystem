<?php
    $data = $_POST;
    $user_id = (int) $data['user_id'];
    $first_name = $data['f_name'];
    $last_name = $data['l_name'];

    // adding the record
try {
    $command = "DELETE FROM users WHERE id = {$user_id}";
    
    include('connection.php');

    $stmt = $conn->prepare($command);
    $stmt->execute();

    echo json_encode([
        'success' => true,
        'message' => $first_name . ' '. $last_name. ' successfully deleted.'
    ]);
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while deleting'
    ]);
}