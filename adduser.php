<?php
    $pageTitle = 'Add client';
    include('includes/header.php');
?>
        <form id="addclientform" method="post" action="addclienttodb.php">
            <h2>Add New Client</h2><br>
            <input type="text" name="firstname" placeholder="First Name">&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" placeholder="Last Name"><br><br>
            <input type="text" name="address" size="27" placeholder="Address">&nbsp;<input type="text" name="number" size="4" placeholder="No">&nbsp;<input type="text" name="pocode" size="6" placeholder="PO code"><br><br>
            <textarea rows="4" cols="40" name="comments" placeholder="Comments"></textarea><br><br>
            <input type="text" name="mobile" size="13" placeholder="Mobile number"><br><br>
            <input type="email" name="email" size="27" placeholder="e-mail" required><br><br><br><br>
            <input type="submit" class="button" name="submitclient" value="Submit">
            <input type="button" class="button" onclick="location.href='index.php';" value="Cancel"/>
        </form>    
<?php
    include('includes/footer.php');
?>