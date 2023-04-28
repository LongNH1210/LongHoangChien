@extends('master')
@section('content')
<!DOCTYPE html>
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/login.css')}}">
  </head>
  <body>
    <form action="{{ route('customer_signup') }}" method="POST">
      @csrf
      <div class="login-box">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="customer_name" required>
          </div>
          <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="text" name="customer_phone" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="customer_email" required>
          </div>
          <div class="form-group">
              <label for="username">User Name</label>
              <input type="text" name="customer_username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="customer_password" required>
            </div>
          <button type="submit">Sign up</button>
          <div><a rel="stylesheet" href="{{url('/')}}">Back</a></div>
      </div>
    </form>
  </body>
</html>
@endsection

