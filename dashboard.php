<?php
    //Start the session.
    session_start();
   if(!isset($_SESSION['user'])) header('location: login.php');

    $user = $_SESSION['user'];   
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
    <title>Dashboard - Inventory Management System</title>
    
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/97c583544d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <!--<img src="<?=$user['image'] ?>" alt="User image." id="userImage" />-->
                <img src="images/user/wakil.jpeg" alt="User image." id="userImage" />
                <span><?=$user['first_name'] . ' ' . $user['last_name'] ?> </span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="menuActive">
                        <a href="" class="menuActive"><i class="fa-solid fa-gauge-high"></i><span class="menuText">   Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-bullhorn"></i><span class="menuText">   Campaigns</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-dollar"></i><span class="menuText">   Revenue Management</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-book"></i><span class="menuText">   Accounts Receivable</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-gears"></i><span class="menuText">   Configuration</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-line-chart"></i><span class="menuText">   Stats</span></a>
                    </li>



                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa-solid fa-bars"></i></a>
                <a href="database/logout.php" id="logoutBtn"><i class="fa-sharp fa-solid fa-power-off"></i>Logout</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
            
        </div>
    </div>
<script>
    var sideBarIsOpen = true;

    toggleBtn.addEventListener( 'click', (event) =>{
        event.preventDefault();

        if(sideBarIsOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.3s all'
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.width = '60px';

            menuIcons = document.getElementsByClassName('menuText');
            for(let i = 0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
        } else{
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.width = '80px';

            menuIcons = document.getElementsByClassName('menuText');
            for(let i = 0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sideBarIsOpen = true;
        }
    });
</script>

</body>
</html>