<!DOCTYPE html>
<html>
    <head>
        <title>Computer List</title>
    </head>
    <body>
        <h1>List of Computers</h1>
        <h3>Add or Delete computers from the list.</h3>
        <form action="addDelComputer.php" method="post">
            <ul id="computerList">
                <li>Commodore 64 &nbsp;<button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>ZX Spectrum &nbsp;<button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>IBM PC 5150 &nbsp; <button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>Apple Macintosh &nbsp; <button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>Commodore 64 &nbsp;<button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>Amstrad CPC 464 &nbsp; <button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>BBC Micro &nbsp; <button type="submit" name="delete">Delete</button></li>
                <br/>
                <li>ZX Spectrum &nbsp;<button type="submit" name="delete">Delete</button></li>
                <br/>
                <label for="addComputer">Add a computer:</label>
                <input type="text" id="addComputer" name="addComputer" />
                <button type="submit" name="add">Add PC</button>
            </ul>
        </form>
    </body>
</html>