<?php
    
        $myfile = fopen("studentData.csv", "r") or die("Unable to open file");
        print("<table border=1>");
        $total = 0;
        $count = 0;
        while(($data = fgetcsv($myfile, 1000, ","))!== FALSE){
            print("<tr>");
            
            for($x =0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");  
            $total += $data[4];
            $count = count($data) + 1;
            $avgscore = $total / $count;
            
        }
            
        print("</table>");        
        fclose($myfile);
        $_POST['name']= null;
    
        print("<br/>");
        print("The average score is " . $avgscore);
    
?>