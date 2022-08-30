
<?php

$username = $_POST['name'];
$password = $_POST['password'];

$mysqlhostname="sql208.unaux.com";
$musqlusername="unaux_32350921";
$dbpass="pharma@321";
$db="unaux_32350921_pharma";


$conn = mysqli_connect($mysqlhostname,$musqlusername,$dbpass,$db);

if (!$conn) {

    echo "Connection failed!";

}
else{
     $reg= "INSERT INTO user(username,password) VALUES('$username','$password')";
    mysqli_query($conn,$reg);
   header("Location: index.html");
}
?>

