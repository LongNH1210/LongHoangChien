<head>
    <link rel="stylesheet" href="{{asset('styles/homepage_admin.css')}}">
</head>
@extends('master')
@section('content')
    <style>
        .nav .li a {
            display: flex;
        }
        .image-container {
          display: block;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 500px;
          position: relative;
        }

        .image-container img {
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .image-container img.active {
            opacity: 1;
        }
    </style>
        <script>
            const images = ["/images/senna1.JPG", "/images/senna2.jpg", "/images/senna3.jpg",
                           "/images/senna4.jpg", "/images/senna5.jpg"];
            let currentImageIndex = 0;  
        function showNextImage() {
            const imageContainer = document.querySelector('.image-container');
            const currentImage = imageContainer.querySelector(`img[data-index="${currentImageIndex}"]`);
            currentImage.classList.remove('active');
            currentImageIndex = (currentImageIndex + 1) % images.length;
            const nextImage = imageContainer.querySelector(`img[data-index="${currentImageIndex}"]`);
            nextImage.classList.add('active');
        }   
            window.onload = function() {
                const imageContainer = document.querySelector('.image-container');
                images.forEach((image, index) => {
                    const imgElement = document.createElement('img');
                    imgElement.src = image;
                    imgElement.setAttribute('data-index', index);
                    if (index === 0) {
                        imgElement.classList.add('active');
                    }
                    imageContainer.appendChild(imgElement);
                });
                setInterval(showNextImage, 1000);
            }
        </script>
    <div class="nav">
        <li>
            <a class="btn btn-primary" href="{{url('/')}}">Log out</a>
            <a class="btn btn-primary" href="{{url('manage_product')}}">Manage Product</a>
        </li> 
    </div>
        <div class="body">
            <div class="image-container"></div>
        </div>

@endsection