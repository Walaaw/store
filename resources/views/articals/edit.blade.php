<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>edit artical</p>
    <form  action="/art/SaveEdit/{{$artical->id}}" method="post">
    @csrf
    @method('PUT')
        name: <input type="text" name="name" value={{$artical->name}} >
        details: <input type="text" name="details" value={{$artical->details}}><br>
        slug: <input type="text" name="slug" value={{$artical->slug}}><br>
        category_id:<input type="number" name="category_id" value={{$artical->category_id}}><br>
        confirmed:<input type="text" name="confirmed" value={{$artical->confirmed}}><br>
        <input type="submit" name="submit" value="edit">
    </form>
</body>
</html>