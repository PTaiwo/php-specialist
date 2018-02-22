<?php
    $fname = $_REQUEST['fullName'];
    $income = $_REQUEST['income'];

    if ($income < 25000)
    {
        $taxRate = 0.025;    
    } else if ($income < 45000)
    {
        $taxRate = 0.0355;    
    } else if ($income < 65000)
    {
        $taxRate = 0.0425;    
    } else if ($income < 90000)
    {
        $taxRate = 0.00515;    
    } else if ($income < 140000)
    {
        $taxRate = 0.065;    
    } else if ($income < 200000)
    {
        $taxRate = 0.7;    
    } else if ($income < 1000000)
    {
        $taxRate = 0.1;    
    } else 
    {
        $taxRate = 0.125;
    }

$taxOwed = $income * $taxRate;

print("<h1>Your Tax Statement</h1>");
print("<p><strong>Name: </strong>" . $fullName);
print("<br/>");
print("<strong>Income: </strong>$" . $income);
print("<br/>");
print("<strong>Tax Rate: </strong>" .$taxRate);
print("<br/>");
print("<strong>Tax Owed: </strong>$" . $taxOwed);
print("</p>")
?>