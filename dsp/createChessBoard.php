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
        $col = $_REQUEST['col'];
        
        echo "<table class=table>";
        for($row = 1; $row <= $_POST['row']; $row++)
        {
         echo "<tr>";
            for($col = 1; $col <= $_POST['col']; $col++)
            {
                $total = $row + $col;
                if($total % 2 == 0)
                {
                    echo "<td class=black></td>";
                }
                else
                {
                    echo "<td class=white></td>";
                }
            }
            echo "</tr>";
        }        
        echo "</table>";
        
        
        ?>
    </body>
</html>