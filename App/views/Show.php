<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Product</h1>
    <p>
        <ul>
            <?php foreach($data as $key=>$item) : ?>
                <li><?= $key.'-'.$item ?></li>
            <?php endforeach ?>
        </ul>
    </p>
</body>
</html>