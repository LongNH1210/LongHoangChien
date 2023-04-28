@extends('master')
@section('content')
    <h2>Category: {{ $category->category_name }}</h2>
    <div class="row">
        @foreach($products as $product)
            <article class="product-container" category_id="{{ $product->product_id }}">
                <a class="product-infor" href="{{route('view_product_detail',$product->product_id)}}">
                </a>
                <td><img src="/images/{{$product->image}}" width="200px"></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>
                <form action="{{ route('add_to_cart', $product->product_id)}}" method="GET">
                    <button type="submit">Add to cart</button>
                </form>
            </article>
        @endforeach
    </div>
@endsection