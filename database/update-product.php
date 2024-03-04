<?php

$product_name = $_POST['product_name'];
$description = $_POST['description'];
$pid = $_POST['pid'];

// Upload or move the file to our directory
$target_dir = "../uploads/products/";

$file_name_value = NULL;
$file_data = $_FILES['img'];

if($file_data['tmp_name'] !== ''){
    $file_name = $file_data['name'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_name = 'product-' . time() . '.' . $file_ext;

    $check = getimagesize($file_data['tmp_name']);


    // Move the file
    if($check){
    if(move_uploaded_file($file_data['tmp_name'], $target_dir . $file_name)){
        // Save the file_name to the database.
        $file_name_value = $file_name;
        }
    }
}



// Update the product record
try{
    $sql = "UPDATE products
                SET
                product_name = ?, description = ?, img =?
                WHERE id = ?";
    
    include('connection.php');

    $stmt = $conn->prepare($sql);
    $stmt->execute([$product_name, $description, $file_name_value, $pid]);

    $response = [
        'success' => true,
        'message' => "<strong>$product_name</strong> Successfully updated to the system."   //$first_name . ' ' . $last_name . 
    ];

} catch (Exception $e){
    $response = [
        'success' => false,
        'message' => "Error updating thr product" 
    ];

}

echo json_encode($response);