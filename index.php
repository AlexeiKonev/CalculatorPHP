<?php
// Функция для сложения
function add($a, $b) {
    return $a + $b;
}

// Функция для вычитания
function subtract($a, $b) {
    return $a - $b;
}

// Функция для умножения
function multiply($a, $b) {
    return $a * $b;
}

// Функция для деления
function divide($a, $b) {
    if ($b == 0) {
        return "Ошибка: деление на ноль недопустимо.";
    }
    return $a / $b;
}

// Получаем значения операндов и операции из запроса
if (isset($_POST['operand1']) && isset($_POST['operand2']) && isset($_POST['operation'])) {
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    $operation = $_POST['operation'];

    // Выполняем выбранную операцию
    switch ($operation) {
        case 'add':
            $result = add($operand1, $operand2);
            break;
        case 'subtract':
            $result = subtract($operand1, $operand2);
            break;
        case 'multiply':
            $result = multiply($operand1, $operand2);
            break;
        case 'divide':
            $result = divide($operand1, $operand2);
            break;
        default:
            $result = "Ошибка: недопустимая операция.";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form method="post" action="">
        <input type="number" name="operand1" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="operand2" required>
        <input type="submit" value="Выполнить">
    </form>

    <?php if (isset($result)): ?>
        <h2>Результат: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
