<?php
// Start the session
session_start();
// Capture the table mappings
include('table_columns.php');

// Capture the table name.
$table_name = $_SESSION['table'];
$columns = $table_columns_mapping[$table_name];

// Loop through the columns
$db_arr = [];
$user = $_SESSION['user'];
foreach ($columns as $column) {
      if(in_array($column, ['created_at', 'updated_at'])) $value = date('Y-m-d H:i:s');
      else if ($column == 'created_by') $value = $user['id'];
      else $value = isset($_POST[$column]) ? $_POST[$column] : '';

      $db_arr[$column] = $value;
}


$table_properties = implode(", ",   array_keys($db_arr));
$table_placeholders = ':' . implode(", :", array_keys($db_arr));

// $table_name = $_SESSION[users];
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $email = $_POST['email'];
// $password = $_POST['passwords'];
// $encrypted = password_hash($password, PASSWORD_DEFAULT);      // `users`(`first_name`, `last_name`, `email`, `passwords`, `created_at`, `updated_at`)
                                                                 // ('".$first_name."', '".$last_name."', '".$email."', '".$encrypted."', NOW(), NOW())";

// adding the record
try {
    $sql = "INSERT INTO 
                    $table_name($table_properties) 
                VALUES
                    ($table_placeholders)";
    
    include('connection.php');

    $stmt = $conn->prepare($sql);
    $stmt->execute($db_arr);

    $response = [
        'success' => true,
        'message' => ' successfully added to the system.'   //$first_name . ' ' . $last_name . 
    ];
} catch(PDOException $e) {
    $response = [
      'success' => false,
      'message' => $e->getMessage()
    ];   
} 
  $_SESSION['response'] = $response;
  header('location: ../'  . $_SESSION['redirect_to']);
?>