<?php
    $computers = array("Commodore 64",
                 "ZX Spectrum",
                 "IBM PC 5150",
                 "Apple Macintosh",
                 "Commodore 64",
                 "Amstrad CPC 464",
                 "BBC Micro",
                 "ZX Spectrum");

    //Looping through the array to create the form.

    print "<h1>Add or delete a computer!</h1>";
    print '<form action="" method="post">';
    for($i = 0; $i < count($computers); $i++)
    {
        //$out += $computers[$i];
        //$out = " <button>Delete</button> <br/>";
        print $computers[$i] . ' <button type="submit" name="delete" value="$computers[$i]">Delete</button><br/>';
        print "<br/>";
    }
    print "<br/>";
    print '<input type="text" name="add" placeholder="Add a Computer"> <button type="submit">Add</button>';
    print "</form>";

    // Process the form action
    if(isset($_POST['delete']))
    {
        
        unset ($computers[$i]);
    }  
    

    //print($out);
        

?>