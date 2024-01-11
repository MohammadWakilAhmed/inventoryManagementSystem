<div class="dashboard_sidebar" id="dashboard_sidebar" >
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <!--<img src="<?=$user['image'] ?>" alt="User image." id="userImage" />-->
                <img src="images/user/wakil.jpeg" alt="User image." id="userImage" />
                <span><?=$user['first_name'] . ' ' . $user['last_name'] ?> </span>
            </div>
            
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <!-- class="menuActive" -->
                    <li class="liMainMenu">
                        <a href="./dashboard.php"><i class="fa-solid fa-gauge-high"></i><span class="menuText">   Dashboard</span></a>
                    </li>
                    <li class="liMainMenu">
                        <a href="#"><i class="fa-solid fa-user-plus"></i><span class="menuText">   Product Management</span></a>
                    </li>
                    <li class="liMainMenu">
                        <a href="#"><i class="fa-solid fa-user-plus"></i><span class="menuText">   Supplier Management</span></a>
                    </li>
                    <li class="liMainMenu">
                        <a href="javascript:void(0);" class="liMainMenu_link">
                            <i class="fa-solid fa-user-plus"></i><span class="menuText">   User Management</span>
                            <i class="fa fa-angle-left mainMenuIconArrow" style="float:right; text-align:center; margin-top: 2px;"></i>
                        </a>
                        <ul class="subMenus" style="display: none;">
                            <li><a style="padding-left: 25px;
                                        padding-top: 10px;
                                        padding-bottom: 10px;
                                        text-transform: none;
                            "href="#"><i class="fa fa-circle"></i> View Users</a></li>
                            <li><a style="padding-left: 25px;
                                        padding-top: 10px;
                                        padding-bottom: 10px;
                                        text-transform: none;"href="#"><i class="fa fa-circle"></i> Add Users</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>



