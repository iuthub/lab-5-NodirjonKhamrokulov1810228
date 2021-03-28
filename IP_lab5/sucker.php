<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucker.php</title>
</head>
<body>
<h2>Thanks, sucker!</h2>
<dl>

    Name
    </dt>
    <dd>
        <?= $_REQUEST["firstname"] ?>
    </dd>

    <dt>
        Section
    </dt>
    <dd>
        <?= $_REQUEST["Section"] ?>
    </dd>

    <dt>
        Credit Card
    </dt>
    <dd>
        <?= $_REQUEST["password"] ?>
        <?= $_REQUEST["(Visa)"] ?>
    </dd>


</dl>
<p>Here are all the suckers who have submitted here: <pre><?= file_get_contents('suckers.txt');?></pre>

</body>
</html>



