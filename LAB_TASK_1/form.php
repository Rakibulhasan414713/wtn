<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset>
            <legend>Personal</legend>
            <table border="0" width="50%" align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="phone" placeholder="Enter your phone number"></td>
                </tr>
                <!-- Additional fields here -->
            </table>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collecting form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Display collected data (you can also process/store it in a database)
        echo "<h3>Submitted Data:</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
    }
    ?>
</body>
</html>