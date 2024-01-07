<?php
    //Start the session.
    session_start();
   if(!isset($_SESSION['user'])) header('location: login.php');
   // $_SESSION['table'] = 'users';

    $user = $_SESSION['user']; 
    $users = include('database/show-users.php'); 
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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="dashboardMainContainer">
        <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                <div class="row">
                    <div class="column column-5">   
                        <h1 class="section_header"> <i class="fa fa-plus"></i> Create User</h1>                
                            <div id="userAddFormContainer">
                            <form action="database/add.php" method="POST" class="appForm">
                                <div class="appFormInputContainers">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="appFormInput" id="first_name" name="first_name" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="appFormInput" id="last_name" name="last_name" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="email">Email</label>
                                    <input type="text" class="appFormInput" id="email" name="email" />
                                </div>
                                <div class="appFormInputContainers">
                                    <label for="passwords">Password</label>
                                    <input type="password" class="appFormInput" id="passwords" name="passwords" />
                                </div>
                                <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Add User</button>

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
                        <div class="column column-7">
                        <h1 class="section_header"> <i class="fa fa-list"></i> List of Users</h1>
                        <div class="section_content">
                            <div class="users">
                            <p class="userCount"><?= count($users) ?> Users</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($users as $index=> $user){ ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?= $user['first_name'] ?></td>
                                                <td><?= $user['last_name'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= date('M d, Y @ h:i:s A', strtotime($user['created_at'])) ?></td>
                                                <td><?= date('M d, Y @ h:i:s A', strtotime($user['updated_at'])) ?></td>
                                                <td>
                                                    <a href=""><i class="fa fa-pencil"></i>Edit<br>
                                                    </a>
                                                    <a href=""class="deleteUser"
                                                                data-userid="<?= $user['id'] ?>" 
                                                                data-fname="<?= $user['first_name'] ?>" 
                                                                data-lname="<?= $user['last_name'] ?>" 
                                                    >
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }?>
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
<script src="js/script.js"></script>
<script src="js/jquery/jquery-3.7.1.min.js"></script>
<script>
    function script(){

        this.initialize = function(){
            this.registerEvents();
        },

        this.registerEvents = function(){
            document.addEventListener('click', function(e){
                targetElement = e.target;
                classList = targetElement.classList;
                if(classList.contains('deleteUser')){
                    e.preventDefault();
                    userId = targetElement.dataset.userid;
                    fname = targetElement.dataset.fname;
                    lname = targetElement.dataset.lname;
                    fullName = fname + ' ' + lname;
                    

                    if(window.confirm('Are you sure to delete '+ fullName +'?')){
                        $.ajax({
                            method: 'POST',
                            data: {
                                user_id: userId,
                                f_name: fname,
                                l_name: lname
                            },
                            url: 'database/delete-user.php',
                            dataType: 'json',
                            success: function(data){
                                if(data.success){
                                    if(window.confirm(data.message)){
                                        location.reload();
                                    }
                                } else window.alert(data.message);
                            }
                        })

                    } else{
                        console.log('will not delete this user');
                    }
                }  
            });
        }
    }

    var script = new script;
    script.initialize();
</script>
</body>
</html>