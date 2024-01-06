<?php
// Start the session

session_start();

//$table_name = $_SESSION[users];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['passwords'];
$encrypted = password_hash($password, PASSWORD_DEFAULT);

// adding the record
try {
    $command = "INSERT INTO 
                    `users`(`first_name`, `last_name`, `email`, `passwords`, `created_at`, `updated_at`) 
                VALUES
                    ('".$first_name."', '".$last_name."', '".$email."', '".$encrypted."', NOW(), NOW())";
    
    include('connection.php');

    $stmt = $conn->prepare($command);
    $stmt->execute();

    $response = [
        'success' => true,
        'message' => $first_name . ' ' . $last_name . ' successfully added to the system.'
    ];
} catch(PDOException $e) {
    $response = [
      'success' => false,
      'message' => $e->getMessage()
    ];
    
} 
  $_SESSION['response'] = $response;
  header('location: ../users-add.php');
?>