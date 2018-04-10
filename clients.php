<?php

$pageTitle = 'Clients';
include('includes/connection.php');
include('includes/header.php');

$query = "SELECT * FROM clients";
$result = mysqli_query( $conn, $query );

?>

        <h2>Clients</h2>
        <div id="table-responsive">
            <?php    

            
            if( mysqli_num_rows($result) > 0 ) {

                // we have data!

                echo "<table class='table table-bordered'><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Address</th><th>No</th><th>PO code</th><th>Comments</th><th>Mobile No</th><th>Email</th></tr>";

                while( $row = mysqli_fetch_assoc($result) ) {
                    echo "<tr><td>". $row["clientid"] . "</td><td>". $row["firstname"] . "</td><td>". $row["lastname"] . "</td><td>" . $row["address"] . "</td><td>" . $row["number"] . "</td><td>" . $row["pocode"] . "</td><td>" . $row["comments"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["email"] . "</td></tr>";
                }

                echo "</table>";

            } else { //no data
                echo "Whoops! No results.";
            }

                mysqli_close($conn);
            ?>
        </div>
<?php
    include('includes/footer.php');
?>