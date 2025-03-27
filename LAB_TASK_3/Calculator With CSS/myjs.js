function calculate(operation) {
    const num1 = parseFloat(document.getElementById("num1").value);
    const num2 = parseFloat(document.getElementById("num2").value);
    let result;

    switch (operation) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            result = num2 !== 0 ? num1 / num2 : 'Error: Division by zero';
            break;
        case 'mod':
            result = num1 % num2;
            break;
        case 'power':
            result = Math.pow(num1, num2);
            break;
        default:
            result = 'Invalid Operation';
    }

    document.getElementById("result").innerHTML = `Result: ${result}`;
}
