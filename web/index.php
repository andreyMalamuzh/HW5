<!DOCTYPE html>
<html>
<head>
    <title>HomeWork #5</title>
    <meta charset="UTF-8">
</head>
<body>
    <p>Квадратное уравнение имеет вид: ax^2 + bx + c = 0</p>
    <form method="post">
        <label>Введите значение a: <input type="text" name="a"></label>
        <label>Введите значение b: <input type="text" name="b"></label>
        <label>Введите значение c: <input type="text" name="c"></label>
        <input type="submit" value="OK" name="ok"><br><br>
    </form>
    <?php require_once('../App/Equation/Equation.php');?>
</body>
</html>