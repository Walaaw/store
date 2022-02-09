
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
<h1>{{ $category->id}}</h1>
<h5>{{ $category->name}}</h5>
<h1>related artical</h1>
@foreach($data as $artical)
<li>{{ $artical->category_id}}</li>
<li>{{ $artical->name}}</li>
<li>{{ $artical->details}}</li>
<li>{{ $artical->slug}}</li>
<p>-----------------------</p>
@endforeach
<a href="/cat" class="btn btn-primary">back</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>