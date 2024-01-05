<?php
    // Start the session
    session_start();
    if(isset($_SESSION['user'])) header('location: dashboard.php');

    $error_message = '';

    if($_POST){
    include('database/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    //$query = 'SELECT * FROM users WHERE users.email ="'. $username.'" AND users.password ="'.$password.'"';
   // $stmt = $conn->prepare($query);
    //$stmt->execute();

    //if($stmt->rowCount() > 0){
    //    $stmt->setFetchMode(PDO::FETCH_ASSOC);
     //   $user = $stmt->fetchALL()[0];
      //  $_SESSION['user'] = $user;

    //    header('location: dashboard.php');
   // } else $error_message = 'Please make sure that the username and password are correct.';   
    $stmt = $conn->prepare(SELECT * FROM users);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $users = $stmt->fetchAll();

    $user_exist = false;
    foreach($users as $user){
        $upass = $user['password'];

        if(password_verify($password, $upass)){
            $user_exist = true;
            $_SESSION['user'] = $user;
            break;
        }
    }

    if($user_exist) header('Location: dashboard.php');
    else $error_message = 'Please make sure that the username and password are correct.';
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Login - Inventory Management System</title>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
    
    <?php if(!empty($error_message)) { ?>
        <div id="errorMessage">
        <strong>Error:</strong> <p><?= $error_message ?> </p>
        </div> 
    
    <?php }?>
    
    <div class="container">
        <div class="loginHeader">
            <h1>IMS</h1>
            <p>Inventory Management System</p>
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <div class="loginCredentials">
                    <label for="">USERNAME</label>
                    <input placeholder="username" name="username" type="text" />
                </div>
                <div class="loginCredentials">
                    <label for="">PASSWORD</label>
                    <input placeholder="password" name="password" type="password" />
                </div>
                <div class="loginButton">
                    <button>Login</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>