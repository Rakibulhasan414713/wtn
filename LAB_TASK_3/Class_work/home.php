<!DOCTYPE html>
<html>
<head>
    <title>PHP and JavaScript Example</title>
    <script src="myjs.js"></script> <!-- Link to the external JavaScript file -->
</head>
<body>
    <h1>PHP and JavaScript Integration</h1>

    <!-- Button to display 'hello' -->
    <button onclick="printMessage()">Click Me</button>
    <p id="print"></p>

    <!-- Input field to display user input -->
    <form method="post" action="">
        <input type="text" id="input" name="input" placeholder="Type something here...">
        <button type="submit" name="showinput">Submit Input</button>
    </form>
    <p id="printinput">
        <?php
        // Display user input if 'showinput' button is clicked
        if (isset($_POST['showinput']) && !empty($_POST['input'])) {
            $inputValue = htmlspecialchars($_POST['input']);
            echo $inputValue;
        }
        ?>
    </p>
</body>
</html>
