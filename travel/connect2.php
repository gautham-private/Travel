<?php
$Email = $_POST['Email'];
//database connection
$conn = new mysqli('localhost','root','','travel');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into subscribe(Email)
values(?)");
$stmt->bind_param("s",$Email);
$stmt->execute();
echo "SUBSCRIBED SUCCESSFULLY";
$stmt->close();
$conn->close();
}
?>