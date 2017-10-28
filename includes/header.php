<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TechSupporter - <?php echo $pageTitle ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shorcut icon" type="image/x-icon" href="images/favicon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>   
            <h1>
                <a href="index.php"><img id="homeicon" class="img-fluid" src="images/home.png" alt="Home" title="Homepage"></a>TechSupporter
                <a href="adduser.php"><img id="usericon" class="img-fluid" src="images/add-user.png" alt="Add User" title="Add User"></a>
                <a href="addtask.php"><img id="taskicon" class="img-fluid" src="images/add-task.png" alt="Add Task" title="Add Task"></a>
                <img id="menuicon" class="img-fluid" src="images/menuicon.png" onclick="myFunction()" alt="Menu" title="Menu"><ul id='dropdown' class='dropdown-content'>
                <li><a href='#'>Front Page</a></li>
                <li ><a href="#">Exit</a></li>
                </ul>
            </h1>
        </header>