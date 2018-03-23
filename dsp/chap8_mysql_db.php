<?php
    //Step 1, create connection info and connect to mysql DB    
    require('cscd_connection.php');

    //Step 2, if form is submitted, add or delete new values to mysql
    if(isset($_REQUEST['new_computer']) && isset($_REQUEST['new_computer_id'])){
        $sql = "INSERT INTO computers (id, name) VALUES (" . $_REQUEST['new_computer_id'] . ", '" . $_REQUEST['new_computer'] . "')";
        if (mysqli_query($connection, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    };

    
    //Step 3, select existing data from table
    $result = $connection->query("SELECT * FROM computers");
    
    //Step 4, create computer array, push information into the array
    $computers = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            array_push($computers, array($row["id"], $row["name"]));
        }
    }
    
    //Step 5, close connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Computer List</title>
    </head>
    <body>
        <h1>List of Computers</h1>
        <h2>Delete Computers from this list</h2>
        <ul>
            <?php for($x = 0; $x < count($computers); $x++){
                echo '<li>ID: ' . $computers[$x][0] . ', Name: ' . $computers[$x][1] . ' <a href="chap8_mysql_delete.php?id=' . $computers[$x][0] . '"><input type="button" class="submit" value="Delete" /></a></li><br/>';
            } ?>
        </ul>
        <form method="post" action="chap8_mysql_db.php">
            <input type="number" name="new_computer_id" placeholder="ID" required />
            <input type="text" name="new_computer" placeholder="New Computer" /><button type="submit">Add Computer</button>
        </form>
    </body>
</html>