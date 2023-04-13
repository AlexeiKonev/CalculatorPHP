<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;

    // Выполняем операцию в зависимости от выбранного оператора
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Ошибка: деление на ноль!";
                exit;
            }
            break;
        default:
            echo "Ошибка: недопустимый оператор!";
            exit;
    }

    echo "<div class='result'>Результат: " . $result . "</div>";
}
?>
