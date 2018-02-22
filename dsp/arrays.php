<?php
    $gpas = array(3.2, 3.33, 4.0, 1.9, 2.66, 2.93, 3.45);
    print("The first GPA is " . $gpas[0]);
    print("<br/>The last GPA is " . $gpas[count($gpas) - 1]);

    $family = array("Marolyn",
                    "Ann",
                    "Edward",
                    "Gregory",
                    "Lawrence",
                    "Patrick");

    print("<br/>" . $family[3]);
    print("<br/>");
    for($x = 0; $x < count($family); $x++)
    {
        print($x . ": " . $family[$x] . "<br/>");
    }
?>