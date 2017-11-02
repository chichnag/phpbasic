<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/2
 * Time: 上午 10:51
 */

//say hello world to browser
echo '<h1>Hello world</h1>';

$names = ['Bob', 'John', 'Tom'];
/**for ($i = 0; $i < count($names); $i++){
 * echo $names[i];*/


if (isset($_GET['x'])) {
    $x = $_GET['x'];
} else {
    $x = 0;
}

if (isset($_GET['y'])) {
    $y = $_GET['y'];
} else {
    $y = 0;
}

if (isset($_GET['method'])) {
    $method = $_GET['method'];
} else {
    $method = "add";
}


if ($method == 'add') {
    $result = $x + $y;
} elseif ($method == 'sub') {
    $result = $x - $y;
} elseif ($method == 'times') {
    $result = $x * $y;
} elseif ($method == 'division') {
    $result = $x / $y;
} else {
    $result = $x + $y;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<h1>陣列裡共有 <?= count($names) ?>個名字</h1>
<h1>目前指定的名字是<?= $names[1] ?></h1>

<p>

<form action="index.php" method="GET">
    <input name="x" type="Number" value="<?= $x; ?>">
    <select name="method" id="">
        <option value="add" <?php if ($method == "add") {
            echo "selected";
        } ?>>+
        </option>
        <option value="sub" <?php if ($method == "sub") {
            echo "selected";
        } ?>>-
        </option>
        <option value="times" <?php if ($method == "times") {
            echo "selected";
        } ?>>*
        </option>
        <option value="division" <?php if ($method == "division") {
            echo "selected";
        } ?>>/
        </option>
    </select>
    <input name="y" type="Number" value="<?= $y; ?>">
    <input type="submit" value="=">
    <?= $result; ?>
</form>


</body>
</html>
