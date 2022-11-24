<!DOCTYPE html>
<html lang="en">

@section('title','| Company Name')
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
            <img src="{{asset('images/rings.png')}}" />
            <h5>Rings</h5>
        </div>
        <div class="card2">
            <img src="{{asset('images/necklace.png')}}" />
            <h5>Necklaces</h5>
        </div>
        <div class="card2">
            <img src="{{asset('images/earring.png')}}" />
            <h5>Earrings</h5>
        </div>
        <div class="card2">
            <img src="{{asset('images/bracelet.png')}}" />
            <h5>Charms & Bracelets</h5>
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