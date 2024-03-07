<?php
    //Start the session.
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'suppliers';
    $_SESSION['redirect_to']= 'supplier-add.php';

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
    <title>Add Supplier - Inventory Management System</title>

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
                        <h1 class="section_header"> <i class="fa fa-plus"></i> Create Supplier</h1>                
                            <div id="userAddFormContainer">
                            <form action="database/add.php" method="POST" class="appForm" enctype="multipart/form-data" >
                                <div class="appFormInputContainers">
                                    <label for="supplier_name">Supplier Name</label>
                                    <input type="text" class="appFormInput" id="supplier_name" placeholder="Enter supplier name..." name="supplier_name" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="supplier_location">Location</label>
                                    <input type="text"class="appFormInput" id="supplier_location" placeholder="Enter product supplier location..." name="supplier_location" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="email">Email Address</label>
                                    <input type="text"class="appFormInput" id="email" placeholder="Enter supplier email..." name="email" />
                                </div>
                                
                                <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Create Supplier</button>

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