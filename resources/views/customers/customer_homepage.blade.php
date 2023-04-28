@extends('master1')
@section('content')
<style>
    .row {
    display: flex;
    justify-content: center;
    align-items: center;
}

.action {
    margin: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px #000;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 24px;
    font-weight: bold;
}

.action a {
    text-decoration: none;
    color: #000;
}
</style>
    <div class="row">
        <div class="action">
            <a href="{{url('view_product_list')}}">View Products</a>
        </div>
        <div class="action">
            <a href="{{url('about_us')}}">About Us</a>
        </div>
    </div>
@endsection