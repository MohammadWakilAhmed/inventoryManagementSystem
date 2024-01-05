//<?php
//// Start the session
//
//session_start();
//
//$table_name = $_SESSION['table'];
//$first_name = $_POST['first_name'];
//$last_name = $_POST['last_name'];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$encrypted = password_hash($password, PASSWORD_DEFAULT);
//
//// adding the record
//try {
//    $command = "INSERT INTO $table_name(first_name, last_name, email) 
//    VALUES ('$first_name', '$last_name', '$email')";
//    
//    include('connection.php');
//
//    $stmt = $conn->prepare($command);
//    $stmt->execute();
//
//    $response = [
//        'success' => true,
//        'message' => $first_name . ' ' . $last_name . 'successfully added to the system.'
//    ];
//} catch(PDOException $e) {
//    $response = [
//      'success' => false,
//      'message' => $e->getMessage()
//    ];
//    
//} 
//  $_SESSION['response'] = $response;
//  header('location: ../users-add.php');
//?>