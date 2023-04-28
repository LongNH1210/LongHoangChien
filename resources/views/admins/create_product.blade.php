<!DOCTYPE html>
<html lang="en">
<head>
    @extends('master')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @section('content')
    <div class="page-infor">
        <p class="strong">Import product information:</p>
    </div>
    <div class="input-form">
        <form action="{{url('storeProduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Category:</strong>
                        <input type="text" name="product_category" class="form-control" placeholder="Category" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="text" name="product_price" class="form-control" placeholder="Price" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="product_description" class="form-control" placeholder="Description" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="Image" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <button type="submit">Submit</button>
                    <a class="btn btn-prinary" href={{url('manage_product')}}>Back</a>
                </div>
            </div>
        </form>
    </div>
    @endsection
</body>
</html>