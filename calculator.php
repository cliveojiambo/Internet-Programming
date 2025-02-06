<!DOCTYPE html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
    body {
    font-family: Arial, 'Times New Roman', Times, serif;
    margin: 20px;
    padding: 20px;
    background-color:rgba(13, 13, 13, 0);
}

h1 {
    color: #333;
}

form {
    background: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input, select {
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color:rgb(239, 10, 29);
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #218838;
}

h2 {
    color: #28a745;
}
</style>
</head>
</body>
    <h1>Multipurpose Calculator</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" step="any" required>
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" step="any">
        <br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
            <option value="exponent">Exponentiation (^)</option>
            <option value="percentage">Percentage (%)</option>
            <option value="sqrt">Square Root (√)</option>
            <option value="log">Logarithm (log)</option>
        </select>
        <br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = ($num2 != 0) ? $num1 / $num2 : "Undefined (Division by Zero)";
                break;
            case 'exponent':
                $result = pow($num1, $num2);
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
                break;
            case 'sqrt':
                $result = sqrt($num1);
                break;
            case 'log':
                $result = log($num1);
                break;
            default:
                $result = "Invalid Operation";
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>