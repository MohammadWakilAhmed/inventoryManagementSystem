<?php
    //Start the session.
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'products';
    $_SESSION['redirect_to']= 'product-add.php';

    $show_table = 'products'; 
    $users = include('database/show.php'); 
    // $_SESSION['user'] = [
    //    'email' => 'wakilahmedony@ims.com',
    //    'image' => 'images/user/wakil.jpeg'
    // ]    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Inventory Management System</title>

    <?php include('partials/app-header-scripts.php'); ?>
</head>
<body>
    <div class="dashboardMainContainer">
        <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                <div class="row">
                    <div class="column column-12">   
                        <h1 class="section_header"> <i class="fa fa-plus"></i> Create Product</h1>                
                            <div id="userAddFormContainer">
                            <form action="database/add.php" method="POST" class="appForm" enctype="multipart/form-data" >
                                <div class="appFormInputContainers">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="appFormInput" id="product_name" placeholder="Enter product name..." name="product_name" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="description">Description</label>
                                    <textarea class="appFormInput productTextAreaInput" id="description" placeholder="Enter product description..." name="description" >
                                    </textarea>
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="description">Suppliers</label>
                                    <select class="supplierOption" name="suppliers[]" id="suppliersSelect">
                                        <option class="supplierOption" value="">Select Supplier</option>
                                        <?php
                                        $show_table = 'suppliers';
                                        $suppliers = include('database/show.php'); 

                                        foreach($suppliers as $supplier){
                                            echo "<option value='". $supplier['id'] . "'> ".$supplier['supplier_name'] ."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="appFormInputContainers">
                                    <label for="product_name">Product Image</label>
                                    <input type="file" name="img" />
                                </div>
                                
                                <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Create Product</button>

                            </form>
                            <?php if(isset($_SESSION['response'])) { 
                                $response_message = $_SESSION['response']['message'];
                                $is_success = $_SESSION['response']['success'];
                                
                            ?>
                                <div class="responseMessage">
                                    <p class="responseMessage <?= $is_success ? 'responseMessage__success' : 
                                    'responseMessage__error' ?>" 
                                    style = "font-size: 22px; 
                                            text-align: center;
                                            margin-top: 30px;
                                            background: green;
                                            padding: 20px;">
                                        <?= $response_message ?>
                                </p>
                                </div>
                            <?php unset($_SESSION['response']); } ?>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>           
    </div>
</div>

<?php include('partials/app-scripts.php'); ?>
</body>
</html>