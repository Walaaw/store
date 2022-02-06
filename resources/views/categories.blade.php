<!DOCTYPE html>
<html>
    <head>
    <link href="app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="categories"> 
       @foreach ($name as $categories)
       <div class="card m-4" style="width:500px">
       <img class="card-img-top" src="https://picsum.photos/200" alt="Card image">
       <div class="card-img-overlay">
       <a href="#" class="btn btn-primary mt-5">{{$categories}}</a>
  </div>
</div>
        @endforeach 
    </div>
    <div class="row"> 
       @foreach ($product as $item)
        <div class="card m-3" style="width:200px">
        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">{{$item}}</h4>
        <p class="card-text">Some example text.</p>
        <a href="{{url('/ProductDetails/{id}')}}" class="btn btn-primary">show</a>
    </div>
    </div>
        @endforeach 
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
