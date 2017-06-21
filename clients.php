<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TechSupporter | Clients</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shorcut icon" type="image/x-icon" href="images/favicon.png">
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
        <p id="clientdetails">
            <?php
                $con=mysqli_connect("localhost","root","","techsupporter");
                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM clients");

                echo "<table align='center'>
                <tr>
                <th>client details</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "<br>" . $row['address'] . " " . $row['number'] . ", " . $row['mobile'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";

                mysqli_close($con);
            ?>
        </p>
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