<?php

// create connection with db
$connect=new mysqli('localhost','root','','techsupporter');

if(mysqli_errno($connect))
{
		echo 'Failed to connect';
}

// create a variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$number=$_POST['number'];
$pocode=$_POST['pocode'];
$comments=$_POST['comments'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

//Execute the query

$sql = "INSERT INTO clients (firstname,lastname,address,number,pocode,comments,mobile,email) VALUES ('$firstname','$lastname','$address','$number','$pocode','$comments','$mobile','$email')";

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: clients.html");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>