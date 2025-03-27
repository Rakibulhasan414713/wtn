<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css"> <!-- Link to CSS -->
    <script src="myjs.js"></script> <!-- Link to JavaScript -->
</head>
<body>
    <div id="container">
        <h1>Simple Calculator</h1>
        <label>Enter First Number:</label>
        <input type="number" id="num1"><br><br>
        <label>Enter Second Number:</label>
        <input type="number" id="num2"><br><br>
        <h3>Select Operation:</h3>
        <button onclick="calculate('+')">+</button>
        <button onclick="calculate('-')">-</button>
         <button onclick="calculate('/')">/</button>
        <button onclick="calculate('*')">*</button>
        <button onclick="calculate('mod')">Modulus</button>
        <button onclick="calculate('power')">Power</button>
        <h3>Result:</h3>
        <p id="result"></p>
    </div>
</body>
</html>
