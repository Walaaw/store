<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>create artical</p>
    <form action="/art/save" method="post">
        @csrf
        name: <input type="text" name="name"><br>
        details: <input type="text" name="details"><br>
        slug: <input type="text" name="slug"><br>
        category_id:<input type="number" name="category_id"><br>
        confirmed:<input type="text" name="confirmed"><br>
        <input type="submit" name="submit" value="add">

    </form>
</body>
</html>