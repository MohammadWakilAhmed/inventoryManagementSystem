////
////    $servername = "localhost";
////    $username = "root";
////    $password = "";
////
////    // Connecting to database
////    try{
////        $conn = new PDO("mysql:host=$servername;dbname=inventory", $username, $password);
////        // set the PDO error made to exception.
////        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////        
////
////    }catch(\Exception $e){
////        $error_message = $e->getMessage();
////    }
////
////
<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="inventory";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];

	 $sql_query = "INSERT INTO users (first_name,last_name,email,)
	 VALUES ('$first_name','$last_name','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>