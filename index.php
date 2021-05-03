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
        $badword = $_GET["badword"];
        $original_string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, numquam repellendus. Beatae tempore reprehenderit doloribus. Earum illum quasi vel, rem, minus molestiae maxime ullam, ipsam qui soluta quod vitae. Magnam?";
        $original_string_lng = strlen($original_string);
        $good_string = str_replace($badword, '***', $original_string);
    ?>
    <h1>
        <?php echo $original_string; ?>
    </h1>
    <h1>
        La stringa è lunga: <?php echo $original_string_lng; ?> caratteri.
    </h1>
    <h1>
        <?php echo $good_string; ?>
    </h1>
</body>
</html>