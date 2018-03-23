<?php
    $computers = array("Commodore 64",
                 "ZX Spectrum",
                 "IBM PC 5150",
                 "Apple Macintosh",
                 "Commodore 64",
                 "Amstrad CPC 464",
                 "BBC Micro",
                 "ZX Spectrum");

    // Process the form action
    //if(isset($_POST['delete'])) $computers=array_diff($computers, array($_POST['computer']));
    

    //Looping through the array to create the form.

    print "<h1>Add or delete a computer!</h1>";

    foreach($computers as $pcname)
    {
        print '<form action="" method="post">';
        print $pcname . ' <button type="submit" name="delete" value="delete">Delete</button><br/>';
        print '<input type="hidden" name="computer" value="'.$pcname. '"/>';
        print "<br/>";
        
    }
    
    print "<br/>";
    print '<input type="text" name="add" placeholder="Add a Computer"> <button type="submit">Add</button>';
    print "</form>";

    if(isset($_POST['delete']))
    {
        unset($_POST['computer']);
    }
    

    //print($out);
        

?>