<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-3">
  <h2>Category table</h2>
  <p>to create new category press <a href="/create">here</a> </p>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)   
      <tr class="table-primary">
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><button type="button" class="btn btn-warning"><a href="/delete/{{ $category -> id }}">Delete </a></button></td>
        <td><button type="button" class="btn btn-dark"><a href="/show/{{ $category -> id }}">show</a></button>
        <td><button type="button" class="btn btn-warning"><a href="/edit/{{ $category -> id }}">edit</a></button>

</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="container mt-3">
  <h2>articals table</h2>
  <p>to create new artical press <a href="/art/create">here</a> </p>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articals as $artical)   
      <tr class="table-primary">
        <td>{{$artical->id}}</td>
        <td>{{$artical->name}}</td>
        <td><button type="button" class="btn btn-warning"><a href="/art/delete/{{$artical-> id }}">Delete </a></button></td>
        <td><button type="button" class="btn btn-dark"><a href="/art/show/{{ $artical-> id }}">show</a></button>
        <td><button type="button" class="btn btn-warning"><a href="/art/edit/{{ $artical -> id }}">edit</a></button>

</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>