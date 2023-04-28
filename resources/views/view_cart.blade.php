<!DOCTYPE html>
<html lang="en">
<head>
    @extends('master')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('styles/view_cart.css')}}">
</head>
<body>
    @section('content')
    <table >
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="cart">
            <?php $total = 0; ?>
            @forelse($cart as $product_id => $product_infor)
                <tr>
                    <td>{{ $cart[$product_id]['product_name'] }}</td>
                    <td>{{ $cart[$product_id]['product_price'] }}</td>
                    <td>{{ $cart[$product_id]['product_quantity'] }}</td>
                    <?php 
                        $subTotal = floatval($cart[$product_id]['product_price']) * floatval($cart[$product_id]['product_quantity']);
                        $total += $subTotal;
                    ?>
                    <td>${{ $subTotal }}</td>
                    <td>
                        <form action="{{ route('delete_cart_item',  $product_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Remove</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Your cart is empty!!!</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Total:
                    <span id="total">${{ $total }}</span>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                        <button type="submit" onclick="alert('Thank you for your purchase!')">Checkout</button>
                        <a href="view_product_list">Back</a>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
    @endsection
</body>
</html>
