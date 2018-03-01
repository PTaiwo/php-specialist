<?php
    
        $myfile = fopen("studentData.csv", "r") or die("Unable to open file");
        print("<table border=1>");
        while(($data = fgetcsv($myfile, 1000, ","))!== FALSE){
            print("<tr>");
            for($x =0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");                        
            
        }
            
        print("</table>");        
        fclose($myfile);
        $_POST['name']= null;
    
?>