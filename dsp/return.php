<?php
    function averageGrades($arrayOfGrades)
    {
        $total = 0;
        foreach($arrayOfGrades as $grade)
        {
            $total += $grade;
        }
        
        return($total/count($arrayOfGrades));
    }

    $grades = array(94,93,70,89,97,73,69,85,86,99,92);

    print("<strong>Average: </strong>" . averageGrades($grades));
?>