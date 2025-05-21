<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="workplace">Work Place:</label>
        <input type="text" id="workplace" name="workplace" required><br><br>

        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br><br>

        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>