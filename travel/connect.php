<?php
$UserName =$_POST['UserName'];
$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Country = $_POST['Country'];
$TravelHistory = $_POST['travelhistory'];

//database connection
$conn = new mysqli('localhost','root','','travel');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into register(User_Name,Firstname, LastName,Email,Password,Country,Travel_History)
values(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss", $UserName, $FirstName,$LastName, $Email, $Password, $Country, $TravelHistory);
$stmt->execute();
echo "SUCCESSFULL REGISTRATION";
$stmt->close();
$conn->close();
}
?>