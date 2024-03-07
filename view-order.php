<?php
    //Start the session.
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $show_table = 'suppliers';
    $suppliers = include('database/show.php');     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Purchase Orders - Inventory Management System</title> 
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
                        <h1 class="section_header"> <i class="fa fa-list"></i> List of Purchase Orders</h1>
                        <div class="section_content">   
                            <div class="poListContainers">
                                <div class="poList">
                                    <p>Batch #: 1709786713</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Qty Ordered</th>
                                                <th>Supplier</th>
                                                <th>Status</th>
                                                <th>Ordered By</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="poList">
                                    <p>Batch #: 1709786713</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Qty Ordered</th>
                                                <th>Supplier</th>
                                                <th>Status</th>
                                                <th>Ordered By</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="poOrderUpdateBtnContainer">

                                    </div>
                                </div>
                                
                                <div class="poList">
                                    <p>Batch #: 1709786713</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Qty Ordered</th>
                                                <th>Supplier</th>
                                                <th>Status</th>
                                                <th>Ordered By</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product</td>
                                                <td>Qty Ordered</td>
                                                <td>Supplier</td>
                                                <td>Status</td>
                                                <td>Ordered By</td>
                                                <td>Created Date</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> 
            </div>
        </div>
    </div>           
</div>
<?php 
    include('partials/app-scripts.php'); ?>

<script>

    function script(){
        var vm = this;
        this.registerEvents = function(){
             
        },

        this.initialize = function(){
            this.registerEvents();
        }
    }
    var script = new script;
    script.initialize();
</script>
</body>
</html>