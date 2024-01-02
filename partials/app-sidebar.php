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