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
<button type="button" class="btn btn-warning"><a href="/blog">back to blog</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>