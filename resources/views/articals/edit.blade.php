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
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        details: <input type="text" name="details" value={{$artical->details}}><br>
        @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        slug: <input type="text" name="slug" value={{$artical->slug}}><br>
        @error('slug')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        category_id:<input type="number" name="category_id" value={{$artical->category_id}}><br>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        confirmed:<input type="text" name="confirmed" value={{$artical->confirmed}}><br>
        @error('confirmed')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" name="submit" value="edit">
    </form>
</body>
</html>