<?php
$fname = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if (!empty($name) || !empty($email) || !empty($comment)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "portfoliodb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
     $sql = "INSERT Into contacts (name, email, comment) values('$fname', '$email', '$comment')";
  
     if ($conn->query($sql)) {
            header('location: index.html');
    
     } else {
      echo "Error";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>