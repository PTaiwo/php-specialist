<!DOCTYPE html>
<html>
    <head>
        <title>Integrating PHP amd HTML</title>
    </head>
    <body>
        <h1>Welcome to PHP</h1>
        <!-- Inline PHP Block -->
        <p>Today is <?php print(date('l jS \of F Y h:i:s A')); ?>.</p>
        <h2>PHP  Block:</h2>
        <!-- Multiline Block: -->
        <?php
            print("<p>Welcome to the PHP Specialist Course</p>");
            print("<p><strong>Mark Lasoff</strong> is your instructor</p>");
                                     
        ?>
    </body>
</html>