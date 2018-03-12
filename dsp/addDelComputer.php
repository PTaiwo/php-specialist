<?php
   //Creating the DOMDocument Object
    $dochtml = new DOMDocument();
    
    //load content from html page
    $dochtml->loadHTMLFile('chapter_8_lab.php');

    //Getting element by Tag Name
    $items = $dochtml->getElementsByTagName('ul');
    
    //Verifying data collected
    foreach($items as $item) 
    {
   //gets, and outputs the id and items    
    $cname = $item->nodeValue;
    
    echo $cname;
    }

    // Deleting or adding to the array.
    foreach($items as $key => $value)
    {
        if($value == 'Delete')
        {
            unset($items[$key]);
        } 
        print("<br/>" . $key);
        //else
        //{
         //   array_push($items, $key, $value);
        //}
        
        //header("Location: chapter_8_lab.php");
    }

    
?>