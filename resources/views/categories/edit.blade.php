<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>edit category</p>
    <form  action="/SaveEdit/{{$category->id}}" method="post">
    @csrf
    @method('PUT')
        name: <input type="text" name="name" value={{$category->name}} >
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
 
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
       </div>
       @endif
        <input type="submit" name="submit" value="edit">
    </form>
</body>
</html>