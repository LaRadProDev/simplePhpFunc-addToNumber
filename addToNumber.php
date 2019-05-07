<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Put your number to transform</p>
        <input type="text" name="number">
        <p>How much should you increase each digit of the number?</p>
        <input type="text" name="add">
        <p><input type="submit"></p>
    </form>

<?php
if(!empty($_POST)){
    if(!isset($_POST['number'])||!isset($_POST['add'])) return;

    function addToNumber($number, $add){
        $string_number = str_split($number);
        foreach ($string_number as &$val){
            $val += $add;
        }
        unset($val);
        $string_number = implode('', $string_number);
        return $string_number;
    }
    echo 'You entered a number ', $_POST['number']; echo '</br>';
    echo 'Your raise number ', $_POST['add']; echo '</br>';
    echo 'Result after conversion ', addToNumber($_POST['number'], $_POST['add']);
}
?>
</body>
</html>