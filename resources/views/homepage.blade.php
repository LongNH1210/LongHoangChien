@section('content')
@extends('master')
    <div class="nav">
        <a href="{{url('view_product_list')}}">View Products</a>
        <a href="{{url('view_cart')}}">View Carts</a>
    </div>
@endsection