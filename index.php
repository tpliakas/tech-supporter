<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TechSupporter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shorcut icon" type="image/x-icon" href="images/favicon.png">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header>   
            <h1>
                <a href="index.html"><img id="homeicon" src="images/home.png" alt="Home"></a>TechSupporter
                <a href="adduser.html"><img id="usericon" src="images/add-user.png" alt="Add User"></a>
                <a href="addtask.html"><img id="taskicon" src="images/add-task.png" alt="Add Task"></a>
                <img id="menuicon" src="images/menuicon.png" onclick="myFunction()" alt="Menu"><ul id='dropdown' class='dropdown-content'>
                <li><a href='index.html'>Front Page</a></li>
                <li ><a href="#">Exit</a></li>
                </ul>
            </h1>
        </header>    
        <nav>
            <ul>
                <a href="inhouse.php"><li id="inhouse"><b>In House</b></li></a>
                <hr>
                <a href="onsite.php"><li id="onsite"><b>On Site</b></li></a>
                <hr>
                <a href="clients.php"><li id="clients"><b>Clients</b></li></a>
            </ul>
        </nav>
        <img id="mainimage" src="images/bg.jpg" alt="Tech Supporter">  
        <a href="map.html"><img id="mapsicon" src="images/gmaps.png" alt="Map"></a>   
        <hr id="datehr">  
        <p id="date">
        <script>
            var d = new Date();
            document.getElementById("date").innerHTML = d.toDateString();
        </script>
        </p>
        <script>
           function myFunction() {
                document.getElementById("dropdown").classList.toggle("show");
            }
        </script>
    </body>
</html>