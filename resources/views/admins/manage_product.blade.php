@extends('master')  
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/styles/manage_product.css')}}">
</head>
<body>
    <div class="row">
        <p>Manage Product Data</p>
        <div class="row">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('create_product')}}">Add New Product</a>
                <a class="btn btn-primary" href="{{url('admin_homepage')}}">Back</a>
            </div>
        </div>
    </div>
    <table align="center">
        <thead class="strong">
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        @if (count($products) == 0)
            <tr>
                <td colspan="7" align="center">Product List is Empty!</td>
            </tr>
        @else
            <tbody>
                @foreach ($products as $product)
                <?php
                    foreach($categories as $category) {
                    if($product->product_category == $category->category_id)
                        $productCategoryName = $category->category_name;
                    }
                ?>
                <tr>
                    <td>{{$product->product_id}}</td>
                    {{-- <td><img src="{{ asset('images/{{$product->product_image}}') }}" alt=""></td> --}}
                    {{-- <td><img src="{{ asset('images/cable.JPG') }}" alt="" width="250px"></td> --}}
                    <td><img src="/images/{{$product->image}}" width="200px"></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$productCategoryName}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>
                        <form action="{{route('delete_product',$product->product_id)}}" method="POST">
                            <a class="btn btn-info" href="{{route('admin_view_product_detail',$product->product_id)}}">Show</a>
                            <a class="btn btn-info" href="{{route('edit_product',$product->product_id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" href="{{route('delete_product',$product->product_id)}}">Delete</button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        @endif
    </table>
    @endsection
    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
</body>
</html>
