<?php
//This script holds the various functions to convert inputs to desired outputs. e.g(Celsius to Farenheit)

    function fahToCel($temperature)
    {
        $CTemp = ($temperature - 32) / 1.8;
        return $CTemp;
    }

    function celToFah($temperature)
    {
        $FTemp = $temperature * 1.8 + 32;
        return $FTemp;
    }

    function inToCm($measurement)
    {
        $centimeters = $measurement * 2.54;
        return $centimeters;
    }

    function cmToIn($measurement)
    {
        $inches = $measurement * 0.3937;
        return $inches;
    }

    function miToKm($distance)
    {
        $kilometers = $distance * 1.609;
        return $kilometers;
    }

    function kmTomi($distance)
    {
        $miles = $distance * 0.62137;
        return $miles;
    }

    print("<h1>Conversion Results are displayed below</h1>");
    print("<br/>");

    
    if (isset($_REQUEST['radio']) && strlen($_REQUEST['numEntry']) != 0)
    {
        $numEntry = $_POST['numEntry'];  
        //print($numEntry . "<br/>");
        $type = $_POST['radio'];
        //print($type . "<br/>");
        
        if ($type == "fah")
        {
          $temperature = $numEntry;
            print("<strong>Converts to </strong>" . fahToCel($temperature) . " *C");
        }
        
        if ($type == "cel")
        {
          $temperature = $numEntry;
            print("<strong>Converts to </strong>" . celToFah($temperature) . " *F");
        }
        
        if ($type == "inches")
        {
            $measurement = $numEntry;
            print("<strong>Converts to </strong>" . inToCm($measurement) . " Centimeters");
        }
        
        if ($type == "cent")
        {
            $measurement = $numEntry;
            print("<strong>Converts to </strong>" . cmToIn($measurement) . " Inches");
        }
        
        if ($type == "miles")
        {
            $distance = $numEntry;
            print("<strong>Converts to </strong>" . miToKm($distance) . " Kilometers");
        }
        
        if ($type == "kms")
        {
            $distance = $numEntry;
            print("<strong>Converts to </strong>" . kmToMi($distance) . " Miles");
        }
        
        
    } else
        print("<h3><font color='red'>ERROR: You are missing variables, please complete the entries!!!</font></h3>");

    
?>