<!DOCTYPE html>
<html>
    <head>
        <title>Chess Board Lab</title>
    </head>
    <body>
        <h1>Create Your Own Chessboard</h1>
        <h3>Enter Row and Column numbers between 1-8 to create the board(e.g 8x8)</h3>
        <form action="createChessBoard2.php" method="post">
            <label for="row">Number of Rows:</label>
            <input type="number" name="row" id="row" min="1" max="8" />
            <label for="col">Number of Columns:</label>
            <input type="number" name="col" id="col" min="1" max="8" />
            <button type="submit">Submit</button>
        </form>

    </body>
</html>