<?php


include('dbcon.php');
$id = $_GET["id"];

			
// 		

        
            $query = "DELETE FROM student WHERE id = '$id';";

            $result = mysqli_query($conn, $query);




header('location:index.php');


?>
