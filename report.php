<?php
    //Start the session.
    session_start();
   if(!isset($_SESSION['user'])) header('location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventory Management System</title>  
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/97c583544d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="dashboardMainContainer">
        <?php include('partials/app-sidebar.php')?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?>
            <div id="reportsContainer">
                <div class="reportTypeContainer">
                    <div class="reportType">
                        <p>Export Products</p>
                        <div class="alignRight">
                            <a href="database/report_csv.php?report=product" class="reportExportBtn">Excel</a>
                            <a href="database/report_pdf.php?report=product" class="reportExportBtn">Pdf</a>
                        </div>
                    </div>
                    <div class="reportType">
                        <p>Export Suppliers</p>
                        <div class="alignRight">
                            <a href="database/report_csv.php?report=supplier" class="reportExportBtn">Excel</a>
                            <a href="" class="reportExportBtn">Pdf</a>
                        </div>
                    </div>
                </div>
                <div class="reportTypeContainer">
                    <div class="reportType">
                        <p>Export Deliveries</p>
                        <div class="alignRight">
                            <a href="database/report_csv.php?report=delivery" class="reportExportBtn">Excel</a>
                            <a href="" class="reportExportBtn">Pdf</a>
                        </div>
                    </div>
                    <div class="reportType">
                        <p>Export Purchase Orders</p>
                        <div class="alignRight">
                            <a href="database/report_csv.php?report=purchase_orders" class="reportExportBtn">Excel</a>
                            <a href="" class="reportExportBtn">Pdf</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>