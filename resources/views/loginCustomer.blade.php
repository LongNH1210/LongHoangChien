@extends('master')
@section('content')
<!DOCTYPE html>
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/login.css')}}">
  </head>
  <body>
  <form action="{{ route('customer_login') }}" method="POST">
      @csrf
      <div class="login-box">
        <p>Please login first!</p>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" required>
        </div>
        <input type="submit" value="Login">
  </form>
        <div><a rel="stylesheet" href="{{url('sign_up')}}" class="btn">Sign up</a></div>
        <div><a rel="stylesheet" href="{{url('adminLogin')}}" class="btn">Login as admin</a></div>
  </body>
</html>
@endsection

