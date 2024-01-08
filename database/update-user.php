<?php
    $data = $_POST;
    $user_id = (int) $data['userId'];
    $first_name = $data['f_name'];
    $last_name = $data['l_name'];
    $email = $data['email'];

    // adding the record
try {
    $sql = "UPDATE users SET email = ?, first_name = ?, last_name = ?, updated_at = ? WHERE id = ?";
    include('connection.php');

    $stmt = $conn->prepare($sql);
    $stmt->execute([$email, $first_name, $last_name, date('Y-m-d h:i:s'), $user_id]);

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