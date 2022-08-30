
<?php

$username = $_POST['username'];
$password = $_POST['password'];

$mysqlhostname="sql208.unaux.com";
$musqlusername="unaux_32350921";
$dbpass="pharma@321";
$db="unaux_32350921_pharma";


$conn = mysqli_connect($mysqlhostname,$musqlusername,$dbpass,$db);

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='".$username."' AND password='".$password."'limit 1";
 
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
     session_start();
     $_SESSION['loggedion:']=true;
     $_SESSION['username']=$username;
     header("Location:index.html");
 }
 else
 {
     echo "wrong pass!";
     exit(); }
}
else{
     $reg= "INSERT INTO user(username,password) VALUES('$username','$password')";
    mysqli_query($conn,$reg);
   header("Location: index.html");
}
?>

