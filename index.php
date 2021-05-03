<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, numquam repellendus. Beatae tempore reprehenderit doloribus. Earum illum quasi vel, rem, minus molestiae maxime ullam, ipsam qui soluta quod vitae. Magnam?";
        $goodString = str_replace($_GET['badword'], '***', $string);
        echo $goodstring;
    ?>
</body>
</html>