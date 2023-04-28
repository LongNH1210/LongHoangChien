@extends('master')
@section('content')
    <div class="note">
        <p>Login as Customer</p>
    </div>
    <div class="login-form">
        <form action="" method="POST">
            <label for="cus_username"><b>Username:</b></label>
            <input type="text" name="customer_username" placeholder="Enter username">
            <br>
            <label for="cus_password"><b>Password:</b></label>
            <input type="text" name="customer_password" placeholder="Enter password">
            <br>
            <button type="submit" class="btn-login">Login</button>
            <br>
        </form>
    </div>
@endsection