<?php
     require('cscd_connection.php');
     if(!isset($_REQUEST['lastName'])){
         $sql = "SELECT * FROM `students` WHERE lastName='" . $_REQUEST['id'] . "'";
         $result = $connection ->query($sql);         
         while($row = $result->fetch_assoc())
         {
            $lastName = $row['lastName'];
            $firstName = $row['firstName'];
            $test1Grade = $row['test1Grade'];
            $test2Grade = $row['test2Grade'];
            $test3Grade = $row['test3Grade'];
            $test4Grade = $row['test4Grade'];
            $finalExamGrade = $row['finalExamGrade'];
         }
     } else
     {
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $test1Grade = $_POST['test1Grade'];
            $test2Grade = $_POST['test2Grade'];
            $test3Grade = $_POST['test3Grade'];
            $test4Grade = $_POST['test4Grade'];
            $finalExamGrade = $_POST['finalExamGrade'];
         $sql = "UPDATE `students` SET lastName='" . $lastName . "', firstName='" . $firstName . "', test1Grade='" . $test1Grade . "', test2Grade='" . $test2Grade . "', test3Grade='" . $test3Grade . "', test4Grade='" . $test4Grade . "', finalExamGrade='" . $finalExamGrade . "' WHERE lastName = '" . $_REQUEST['id'] . "'";
         mysqli_query($connection, $sql);
         
         header("Location: grade_list.php");
         
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Students Data Update</title>
    </head>
    <body>
        <h1>Students Data Update</h1>
        <form action="grades_update.php" method="post">
            <input type="hidden" name="id" value="<?php print($_REQUEST['id']) ?>">
            <label for="lastName">Last Name:</label>
            <input type="text" placeholder="<?php print($lastName)?>" name="lastName"/><br/>
            <br/>
            <label for="firstName">First Name:</label>
            <input type="text" placeholder="<?php print($firstName)?>" name="firstName"/><br/>
            <br/>
            <label for="test1Grade">Test1 Grade:</label>
            <input type="number" placeholder="<?php print($test1Grade)?>" name="test1Grade"/><br/>
            <br/>
            <label for="test2Grade">Test2 Grade:</label>
            <input type="text" placeholder="<?php print($test2Grade)?>" name="test2Grade"/><br/>
            <br/>
            <label for="test3Grade">Test3 Grade:</label>
            <input type="text" placeholder="<?php print($test3Grade)?>" name="test3Grade"/><br/>
            <br/>
            <label for="test4Grade">Test4 Grade:</label>
            <input type="text" placeholder="<?php print($test4Grade)?>" name="test4Grade"/><br/>
            <br/>
            <label for="finalExamGrade">Final Exam Grade:</label>
            <input type="text" placeholder="<?php print($finalExamGrade)?>" name="finalExamGrade"/><br/>
            <br/>
            <button type="submit">Save</button>
            
        </form>
        
        
    </body>
</html>