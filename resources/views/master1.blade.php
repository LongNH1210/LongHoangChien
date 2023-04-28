<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9aa36a5db4.js" crossorigin="anonymous"></script>
    <title>Shopping Cart Management System</title>
</head>
<style>
header {
display: flex;
align-items: center;
justify-content: center;
background-image: url('/images/logo3.png');
height: 350px;
}

.logo {
font-size: 50px;
text-align: center;
color: white;
text-decoration: none;
}

.logo:hover {
text-decoration: none;
color: white;
}

.fa-shopping-cart {
    font-size: 20px;
    color: blue;
}

.fa-arrow-left {
    font-size: 20px;
    color: blue;
}

footer { 
background-color: #333; 
color: #fff; 
text-align: center; 
padding: 20px; 
}

footer p { 
    margin: 0; 
}
</style>
<body>
    <header>
        <a class="logo" href="">1102 Shop</a>
        <a class="cart-icon" href="{{url('/view_cart')}}"><i class="fa fa-shopping-cart"></i></a>
        <a class="cart-icon" href="{{url('/')}}"><i class="fa-solid fa-arrow-left"></i></a>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>&copy;2020 Shopping Cart. All rights reserved.</p>
    </footer>
</body>
