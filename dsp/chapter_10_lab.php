<!DOCTYPE html>
<html>
    <head>
        <title>Chapter 10 Lab</title>
    </head>
    <body>
        <h1>Conversion Form</h1>
        <form action="chapter_10_lab_function.php" method="post">
            <label for="numEntry">Enter a Digit:</label>
            <input type="text" id="numEntry" name="numEntry" />
            <br/>
            <br/>
            <input type="radio" name="radio" value="cel">Celsius to Farenheit<br/>
            <input type="radio" name="radio" value="fah">Fahrenheit to Celsius<br/>
            <input type="radio" name="radio" value="inches">Inches to Centimeters<br/>
            <input type="radio" name="radio" value="cent">Centimeters to Inches<br/>
            <input type="radio" name="radio" value="miles">Miles to Kilometers<br/>
            <input type="radio" name="radio" value="kms">Kilometers to Miles<br/>
            <br/>
            <button type="submit">Submit</button>
            
        </form>
    </body>
</html>