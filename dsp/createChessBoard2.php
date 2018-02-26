<!DOCTYPE html>
<html>
    <head>
        <title>Chessboard</title>
        <style>
            
            .table
            {
                
                margin-left: auto;
                margin-right: auto;
            }
            
            .black
            {
              height: 50px;
              width: 50px;
              background-color: black;
              border: 1px solid black;
            }
            
            .white
            {
                height: 50px;
                width: 50px;
                background-color: white;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h3 align="center">Your Chessboard</h3>
        
        <?php
        $row = $_REQUEST['row'];
        if(strlen($row) != 0) {
	    $row = $_REQUEST['row'];
        } else {
	    $row = 8;
	    $error = 'Error: Row number not filled in.  Defaulted to 8';
        }
        
        $col = $_REQUEST['col'];
        if(strlen($col) != 0) {
	    $col = $_REQUEST['col'];
        } else {
	    $col = 8;
	    $error = 'Error: Column number not filled in.  Defaulted to 8';
        
        }
        
        
        ?>
    </body>
</html>