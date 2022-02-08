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
<div class="card" style="width:400px;height:100px">
  <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">{{ $artical->name}}</h4>
    <p class="card-text">{{ $artical->details}}</p>
    <p class="card-text">{{ $artical->slug}}</p>
    <p class="card-text">{{ $artical-> category_id}}</p>
    <p class="card-text">{{ $artical-> confirmed}}</p>

    <a href="/art" class="btn btn-primary">back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </div>
</div>
</body>
</html>