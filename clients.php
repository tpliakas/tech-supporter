<?php

include('connection.php');

$query = "SELECT * FROM clients";
$result = mysqli_query( $conn, $query );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TechSupporter | Clients</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shorcut icon" type="image/x-icon" href="images/favicon.png">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="secondary.css">
    </head>
    <body>
        <header>
            <h1>
                <a href="index.html"><img id="homeicon" src="images/home.png" alt="Home"></a>TechSupporter
                <a href="adduser.html"><img id="usericon" src="images/add-user.png" alt="Add User"></a>
                <a href="addtask.html"><img id="taskicon" src="images/add-task.png" alt="Add Task"></a>
                <img id="menuicon" src="images/menuicon.png"  alt="Menu"><ul  class='dropdown-content'>
                <li><a href='index.html'>Front Page</a></li>
                <li ><a href="#">Exit</a></li>
                </ul>
            </h1>
        </header>
        <h2>Clients</h2>
        <div id="table-responsive">
            <?php    

            
            if( mysqli_num_rows($result) > 0 ) {

                // we have data!

                echo "<table class='table table-bordered'><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Address</th><th>No</th><th>PO code</th><th>Comments</th><th>Mobile No</th><th>Email</th></tr>";

                while( $row = mysqli_fetch_assoc($result) ) {
                    echo "<tr><td>". $row["id"] . "</td><td>". $row["firstname"] . "</td><td>". $row["lastname"] . "</td><td>" . $row["address"] . "</td><td>" . $row["number"] . "</td><td>" . $row["pocode"] . "</td><td>" . $row["comments"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["email"] . "</td></tr>";
                }

                echo "</table>";

            } else { //no data
                echo "Whoops! No results.";
            }

                mysqli_close($con);
            ?>
        </div>
        <a href="map.html"><img id="mapsicon" src="images/gmaps.png" alt="Map"></a>
        <hr>
        <p id="date">
        <script>
            var d = new Date();
            document.getElementById("date").innerHTML = d.toDateString();
        </script>
        </p>   
    </body>
</html>