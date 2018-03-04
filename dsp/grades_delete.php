<?php
     require('cscd_connection.php');
     $recordToDelete = $_REQUEST['id'];
     
     $sql = "DELETE from students WHERE lastName ='" . $recordToDelete . "'";
     
     if($connection->query($sql) === TRUE) {
         echo "Record deleted successfully";
     } else {
         echo "Error deleting record: " . $connection->error;
     }

     $connection->close();
     header("Location: grade_list.php");         
     
?>
