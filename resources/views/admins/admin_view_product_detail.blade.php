<!DOCTYPE html>
<html lang="en">
<head>
    @section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('styles/productdetail.css')}}">
</head>
<body>
    <header>
        <a class="logo" href="{{url('/manage_product')}}">1102 Shop</a>
    </header>
    <div class="product-details">
        <h5><img src="/images/{{$product->image}}" alt=""></h5>
            <div class="product-details-right"> 
                <p class="name">{{$product->product_name}}</p>
                <p class="price">${{$product->product_price}}</p>
                <p class="description">{{$product->product_description}}</p>
            </div>
    </div>
    <footer>
        <p>&copy;2020 Shopping Cart. All rights reserved.</p>
    <footer>
</body>
</html>
