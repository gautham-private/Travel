<?php
$Name =$_POST['Name'];
$Phone_Number =$_POST['Phone_Number'];
$Email = $_POST['Email'];
$time = $_POST['time'];
$Message = $_POST['Message'];
//database connection
$conn = new mysqli('localhost','root','','travel');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into contact(Name,Phone_Number,Email,time,Message)
values(?,?,?,?,?)");
$stmt->bind_param("sssss", $Name, $Phone_Number,$Email,$time,$Message);
$stmt->execute();
echo "SUCCESSFULLY SENT";
$stmt->close();
$conn->close();
}
?>