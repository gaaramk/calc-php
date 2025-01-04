<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>

<body>
    <h1>Calculator</h1>
    <form action="calc.php" method="get">

        first number: <br><input type="number" name="num1">
        <br>
        + <input type="radio" name="oprater" value="+">


        - <input type="radio" name="oprater" value="-">


        / <input type="radio" name="oprater" value="/">


        * <input type="radio" name="oprater" value="*">

        <br>
        second number: <br><input type="number" name="num2">
        <br><br>
        <input type="submit">
    </form>



    Answer: <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $oprater = $_GET['oprater'];
    switch ($oprater) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        default:
            $result = "Invalid operator";
            break;
    }

    echo $num1 . " " . $oprater . " " . $num2 . " = " . $result; ?>,
</body>

</html>