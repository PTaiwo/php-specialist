<?php
$animals = array('cat', 'dog', 'mouse', 'elephant');
if(isset($_POST['remove'])) $animals=array_diff($animals, array($_POST['animal']));
foreach($animals as $pet)
{
    echo'<form method="post" action="">';
    echo $pet.'<input type="submit" name="remove" value="remove"/><br/>';
    echo '<input type="hidden" name="animal" value="'.$pet.'"/>';
    echo '</form>';
}

?>