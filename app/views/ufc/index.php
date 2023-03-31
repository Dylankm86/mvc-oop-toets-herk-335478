<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="http://mvc-oop-toets-2.com/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php echo $data['title']; ?></h3>
    <table border="1";>
        <thead>
            <th>name</th>
            <th>ranking</th>
            <th>length</th>
            <th>weight</th>
            <th>age</th>
            <th>winsbyknockout</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
</body>
</html>