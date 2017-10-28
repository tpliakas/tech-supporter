<?php
    $pageTitle = 'Homepage';
    include('includes/header.php');
?>   
        <nav class="col-xs-4">
            <ul>
                <a href="inhouse.php"><li id="inhouse"><b>In House</b></li></a>
                <hr>
                <a href="onsite.php"><li id="onsite"><b>On Site</b></li></a>
                <hr>
                <a href="clients.php"><li id="clients"><b>Clients</b></li></a>
            </ul>
        </nav>
        <img id="mainimage" class="img-fluid" src="images/bg.jpg" alt="Tech Supporter">  
<?php
    include('includes/footer.php');
?>