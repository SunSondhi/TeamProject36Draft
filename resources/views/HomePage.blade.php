<!DOCTYPE html>
<html lang="en">

@section('title','| Pegasus Jewellery')
@include('layouts/head')

<body>


    <div class="top-container-homepage">
        @include('layouts/nav')

    </div>



    <div class="main-container">

        @if(Route::is('admin/'))
        <h1>admin Homepage</h1>
        @endif



        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="{{asset('images/topimg.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('images/img1.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('images/img2.jpg')}}" style="width:100%">
            </div>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>



        <div class="flex-container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Something</h5>
                    <p class="card-text">this and that</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-container">
        <div class="card2">
            <img class="main-homepage" src="{{asset('images/rings.png')}}" />
            <a href="#">
                <h5 class="nav-link">Rings</h5>
            </a>
        </div>
        <div class="card2">
            <img src="{{asset('images/necklace.png')}}" />
            <a href="#">
                <h5 class="nav-link">Necklaces</h5>
            </a>
        </div>
        <div class="card2">
            <img src="{{asset('images/earring.png')}}" />
            <a href="#">
                <h5 class="nav-link">Earrings</h5>
            </a>
        </div>
        <div class="card2">
            <img src="{{asset('images/bracelet.png')}}" />
            <a href="#">
                <h5 class="nav-link">Charms & Bracelets</h5>
            </a>
        </div>
    </div>

    <div class="flex-container">
        <div>
            <h2>Best Sellers</h2>

        </div>
    </div>

    <div class="flex-container">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @include('layouts/footer')
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName(" mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3500); // Change image every 4 seconds
        }
    </script>

</body>

</html>