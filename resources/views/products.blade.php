<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="row"> 
            <div class="card m-3" style="width:200px">
            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">{{$product['name']}}</h4>
            <p class="card-text">{{"id: ".$product['id']}}</p>
            <p class="card-text">{{"price: ".$product['price']}}</p>
            <a href="#" class="btn btn-primary">add to cart</a>
            </div>
            </div>
            <a href="{{url('/home')}}" class="btn btn-primary mt-5">back to home</a>

       </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>