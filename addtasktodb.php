<?php

// create connection with db
$connect=new mysqli('localhost','root','','techsupporter');

if(mysqli_errno($connect))
{
		echo 'Failed to connect';
}

// create a variable
$newtask=$_POST['newtask'];
$tasktitle=$_POST['tasktitle'];
$problemdesc=$_POST['problemdesc'];
$date=$_POST['date'];
$customer=$_POST['customer'];

//Execute the query

$sql = "INSERT INTO tasks (newtask,tasktitle,problemdesc,date,customer) VALUES ('$newtask','$tasktitle','$problemdesc','$date','$customer')";

if ($connect->query($sql) === TRUE) {
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>