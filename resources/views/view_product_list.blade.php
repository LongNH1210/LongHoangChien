@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/9aa36a5db4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('styles/view_product_list.css')}}">
</head>
<body>
    <header>
        <a class="logo" href="{{url('/customer_homepage')}}">1102 Shop</a>
        <a class="cart-icon" href="{{url('/view_cart')}}"><i class="fa fa-shopping-cart"></i></a>
    </header>
    <main>
        <section class="category">
            <h2>Categories</h2>
            <ul>
                @foreach($categories as $category) 
                    <li>
                        <a href="{{ route('category.show', ['category_id' => $category->category_id]) }}">
                            {{$category->category_name }}<br>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="products">
            {{-- <h2>Products @if(isset($selected_category)) in {{$selected_category->category_name}} category @endif</h2> --}}
            <div class="row">
                @foreach($products as $product)
                    <article class="product-container" id="{{ $product->product_id }}">
                        <a class="product-infor" href="{{route('view_product_detail',$product->product_id)}}">
                            <img src="/images/{{$product->image}}" alt="">
                        </a>
                        <h3>{{$product->product_name}}</h3>
                        <p>${{$product->product_price}}</p>
                        <form action="{{ route('add_to_cart', $product->product_id)}}" method="GET">
                            <button type="submit">Add to cart</button>
                        </form>
                    </article>
                @endforeach
            </div>
        </section>
    </main>  
    <footer>
     <p>&copy;2020 Shopping Cart. All rights reserved.</p>
    </footer>
 </body>
</html>
