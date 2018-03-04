<?php
    require('cscd_connection.php');
    $sql = "SELECT id, lastName, firstName, test1Grade, test2Grade, test3Grade, test4Grade, finalExamGrade, ((test1Grade + test2Grade + test3Grade + test4Grade + finalExamGrade)/(5)) as Average, (CASE WHEN ((test1Grade + test2Grade + test3Grade + test4Grade + finalExamGrade)/(5)) >= 90 THEN 'A' WHEN ((test1Grade + test2Grade + test3Grade + test4Grade + finalExamGrade)/(5)) >= 80 THEN 'B' WHEN ((test1Grade + test2Grade + test3Grade + test4Grade + finalExamGrade)/(5)) >= 70 THEN 'C' WHEN ((test1Grade + test2Grade + test3Grade + test4Grade + finalExamGrade)/(5)) >= 60 THEN 'D' ELSE 'F' END) AS grade FROM `students` ";
    $result = $connection ->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Students Data</title>
    </head>
    <body>
        <h1>Students Test Results</h1>
        <?php
            if($result->num_rows > 0)
            {
                print("<table border=1>");
                print("<tr>");
                print("<th>Last Name</th>");
                print("<th>First Name</th>");
                print("<th>Test1 Grade</th>");
                print("<th>Test2 Grade</th>");
                print("<th>Test3 Grade</th>");
                print("<th>Test4 Grade</th>");
                print("<th>Final Exam Grade</th>");
                print("<th>Grade Average</th>");
                print("<th>Final Grade</th>");
                print("</tr>");
                
                                
                while($row = $result->fetch_assoc())
                {                    
                    print("<tr>");
                    print("<td>" . $row["lastName"] . "</td>");
                    print("<td>" . $row["firstName"] . "</td>");
                    print("<td>" . $row["test1Grade"] . "</td>");
                    print("<td>" . $row["test2Grade"] . "</td>");
                    print("<td>" . $row["test3Grade"] . "</td>");
                    print("<td>" . $row["test4Grade"] . "</td>");
                    print("<td>" . $row["finalExamGrade"] . "</td>");
                    print("<td>" . $row["Average"] . "</td>");
                    print("<td>" . $row["grade"] . "</td>");
                    print("<td><a href='grades_update.php?id=" . $row['lastName'] ."'>Update</a></td>");
                    print("<td><a href='grades_delete.php?id=" . $row['lastName'] ."'>Delete</a></td>");
                    print("</tr>");
                    
                }
                print("</table>");
                
                mysqli_close($connection);
            } else
            {
                print("<h1>No Student Data</h1>");
            }
        ?>
    </body>
</html>