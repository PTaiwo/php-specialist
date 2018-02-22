<?php
   //Creating the DOMDocument Object
    $dochtml = new DOMDocument();

    //load content from html page
    $dochtml->loadHTMLFile('chapter_8_lab.php');

    //Getting element by Tag Name
    $items = $dochtml->getElementByTagName('li');

    //Verifying dtata collected
foreach($items as $item) {
   //gets, and outputs the id and items    
    $cname = $item->nodeValue;
    
    echo $cname;
}
    
?>