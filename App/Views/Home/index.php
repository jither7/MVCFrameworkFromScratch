<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>Hello <?php echo htmlspecialchars($name); ?>!</p>

    <ul>
        <?php foreach($colors as $color) { ?>
            <li><?php echo $color ?></li>
        <?php }?>
    </ul>
</body>
</html>