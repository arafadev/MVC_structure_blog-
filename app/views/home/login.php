<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <form action="postlogin" method="POST">
        email<input type="text" name="email">
        password <input type="password" name="password">
        <input type="submit">
    </form>
</body>

</html>