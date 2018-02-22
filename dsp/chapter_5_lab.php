<!DOCTYPE html>
<html>
    <head>
        <title>Tax Calculator</title>
    </head>
    <body>
        <h1>Calculate Tax Rate</h1>
        <fieldset>
        <legend>Tax Calculator</legend>
        <form action="calculateTax.php" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" /><br/>
            <label for="income">Annual Income:</label>
            <input type="number" id="income" name="income" /><br/>
            <button type="submit">Calculate Tax</button>
        </form>
        </fieldset>
        
    </body>
</html>