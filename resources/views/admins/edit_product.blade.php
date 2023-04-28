<!DOCTYPE html>
<html lang="en">
<head>
    @extends('master')
    @section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="page-infor">
        <p class="strong">Update product information:</p>
    </div>
    <div class="update-form">
        <form action="{{route('update_product',$product->product_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>New name:</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>New category:</strong>
                        <input type="text" name="product_category" class="form-control" placeholder="Category">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>New price:</strong>
                        <input type="text" name="product_price" class="form-control" placeholder="Price">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>New description:</strong>
                        <input type="text" name="product_description" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>New image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="Image">
                        <img src="/images/{{$product->image}}" width="250px">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <button type="submit">Submit</button>
                    <a class="btn btn-prinary" href={{url('/manage_product')}}>Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection