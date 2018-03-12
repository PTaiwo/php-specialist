<?php
$testOne = array("Smith"=>98, "Johnson"=>67, "Fields"=>71,                          "Laurel"=>68, "Gold"=>91, "Braverman"=>88,                          "Stone"=>84, "Kiel"=>84);

$testTwo = array("Smith"=>75, "Johnson"=>88, "Fields"=>81,                          "Laurel"=>63, "Gold"=>67, "Braverman"=>82,                          "Stone"=>77, "Kiel"=>81);

$testThree = array("Smith"=>100, "Johnson"=>85, "Fields"=>76,                          "Laurel"=>71, "Gold"=>63, "Braverman"=>55,                          "Stone"=>81, "Kiel"=>79);

$testFour = array("Smith"=>91, "Johnson"=>81, "Fields"=>77,                          "Laurel"=>70, "Gold"=>90, "Braverman"=>82,                          "Stone"=>90, "Kiel"=>100);

$allTest = array($testOne, $testTwo, $testThree, $testFour);

print("<h3>Printing out my Associative Arrays</h3>");
print_r($testOne);
print("<br/>");
print_r($testTwo);
print("<br/>");
print_r($testThree);
print("<br/>");
print_r($testFour);
print("<br/>");
print_r($allTest);
print("</br>");

//The first method for average values of the associative array
print("<br/>");
print("<h3>Using the array_sum method divided by count</h3>");
print("The average of Test One is ");
echo array_sum($testOne) / count($testOne);
print("<br/>");
print("The average of Test Two is ");
echo array_sum($testTwo) / count($testTwo);
print("<br/>");
print("The average of Test Three is ");
echo array_sum($testThree) / count($testThree);
print("<br/>");
print("The average of Test Four is ");
echo array_sum($testFour) / count($testFour);
print("<br/>");

// Using the foreach method to sum the values of the array
$total = 0;
$total2 = 0;
$total3 = 0;
$total4 = 0;

foreach($testOne as $value){    
        $total += $value;
    }

foreach($testTwo as $value){    
        $total2 += $value;
    }

foreach($testThree as $value){    
        $total3 += $value;
    }

foreach($testFour as $value){    
        $total4 += $value;
    }



// Divide the total value by the count of keys.

print("<br/>");
print("<h3>Using the foreach method</h3>");
print("Test One's average is " . $total / count($testOne));
print("<br/>");
print("Test Two's average is " . $total2 / count($testTwo));
print("<br/>");
print("Test Three's average is " . $total3 / count($testThree));
print("<br/>");
print("Test Four's average is " . $total4 / count($testFour));
print("<br/>");

print("<br/>");
print("<h3>Average for each student</h3>");
$student = array();
foreach($allTest as $array)
{
    foreach($array as $key=>$avg)
    {
    $student[$key][] = $avg;
    
    if(isset($abc[$key]))  // Prevent index warning
    {
        $abc[$key] += $avg;
    }
    else
    {
        $abc[$key] = $avg;
    }
  }
}

foreach( $student as $key => $values)
{
    echo $key. ':' .$abc[$key] / count($values);
    print("<br/>");
}

print("<br/>");
print("<br/>");
print("<table>");
print("<tr>");
print("<th></th>&nbsp<th>Test1</th>&nbsp<th>Test2</th>&nbsp<th>Test3</th>&nbsp<th>Test4</th>&nbsp<th>Avg.</th>");
print("</tr>");


$student = array();

foreach($allTest as $array)
{
    //$grade = 0;
    foreach($array as $key=>$grade)
    { 
        $studentName = $key;
        
        print("<tr>");
        print("<td>$key</td><td>$grade</td>");
        
        
           
            
        
      
        
        
    }
    print("</tr>");
}
print("</table>");
    
?>