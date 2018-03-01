<?php
if (isset($_POST['fname']))
    {
        $out = $_POST['fname'] . "," . $_POST['lname'] . "," . $_POST['email'] . "," . $_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'] . "," . $_POST['score'] . "\n";
        $myfile = fopen("studentData.csv", "a") or die("Unable to open file");
        fwrite($myfile, $out);
        fclose($myfile);
    }
?>