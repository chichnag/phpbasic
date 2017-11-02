<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/2
 * Time: 上午 10:51
 */

//say hello world to browser
echo '<h1>Hello world</h1>';

$extra='Cjjh';
$var="My website title is $extra";
echo $var;

$x = $_GET['x'];
$y = $_GET['y'];
$result = $x + $y;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> <?php echo $extra; ?></title>
</head>
<body>
<p>


<form action="index.php" method="GET">
    <input name="x" type="Number" value="<?= $x; ?>">
    +
    <input name="y" type="Number" value="<?= $y; ?>">
    <input type="submit" value="=">
    <?= $result; ?>
</form>


</body>
</html>
