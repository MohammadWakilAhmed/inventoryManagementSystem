<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <!--<img src="<?=$user['image'] ?>" alt="User image." id="userImage" />-->
                <img src="images/user/wakil.jpeg" alt="User image." id="userImage" />
                <span><?=$user['first_name'] . ' ' . $user['last_name'] ?> </span>
            </div>
            
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <!-- class="menuActive" -->
                    <li>
                        <a href="./dashboard.php"><i class="fa-solid fa-gauge-high"></i><span class="menuText">   Dashboard</span></a>
                    </li>
                    <li>
                        <a href="./users-add.php"><i class="fa-solid fa-user-plus"></i><span class="menuText">   Add User</span></a>
                    </li>
                </ul>
            </div>
        </div>