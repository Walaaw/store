<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>create category</p>
    <form action="/save" method="post">
        @csrf
        name: <input type="text" name="name">
        <input type="submit" name="submit" value="add">
    </form>
</body>
</html>