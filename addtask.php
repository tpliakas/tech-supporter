<?php
    $pageTitle = 'Add task';
    include('includes/header.php');
?>
    <body>
        <header>
            <h1>
                <a href="index.php"><img id="homeicon" src="images/home.png" alt="Home"></a>TechSupporter
                <a href="adduser.php"><img id="usericon" src="images/add-user.png" alt="Add User"></a>
                <a href="addtask.php"><img id="taskicon" src="images/add-task.png" alt="Add Task"></a>
                <img id="menuicon" src="images/menuicon.png" alt="Menu"><ul  class='dropdown-content'>
                <li><a href='index.html'>Front Page</a></li>
                <li ><a href="#">Exit</a></li>
                </ul>
            </h1>
        </header>
        <section>
            <form id="newtaskform" method="post" action="addtasktodb.php">
                <h2>Add New Task</h2>
                <br>
                <p class="radioinput">
                    <input type="radio" name="newtask" value="inhouse"><b class="radiotext">In House</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="newtask" value="onsite"><b class="radiotext">On Site</b> <br><br>
                </p>
                <input type="text" name="tasktitle" placeholder="Task title"><br><br><br>
                <textarea rows="4" cols="50" name="problemdesc" placeholder="Description of the problem"></textarea><br><br>
                <input type="date" id="datepicker" name="date"><br>
                <br>
                <input type="text" autocomplete="on" name="customer" placeholder="Customer">
                <br><br><br><br>
                <input type="submit" class="button" name="submittask" value="Submit">
                <input type="button" class="button" onclick="location.href='index.html';" value="Cancel"/>
            </form>
        </section>
<?php
    include('includes/footer.php');
?>