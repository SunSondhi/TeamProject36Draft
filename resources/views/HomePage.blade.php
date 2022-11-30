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



        <div class="main-picture-home">
            <h1>Jew<span style="color:white;">ellery </span><br>
                for<br>
                All</h1>
        </div>


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

    </div>

    <div class="flex-container">
        <div class="card2" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">Contact Us today</h2>
                <p class="card-text">for further information you can always contact us</p>
                <a href="{{ route('Contactus') }}" class="button">Go contact us</a>
            </div>
        </div>
        <div class="card2" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">About Pegasus Jewellery</h2>
                <p class="card-text">Wanna find out more about us? why don't you check out about us page</p>
                <a href="{{ route('Aboutus') }}" class="button">Go About us</a>
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
            <h1>Best Sellers</h1>

        </div>
    </div>

    <div class="flex-container">
        <div class="card2" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/ring2.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8" style="padding: 2%;">
                    <div class="card-body">
                        <h5 class="card-title">Glitter Ring</h5>
                        <p class="card-text">Pegasus Jewellery’s Venetias Glitter Ring is a signature piece, testament to the fine craftsmanship and skill of our Jewellers. This flamboyant wide-band cluster ring combines multiple small cut diamonds set on a wide band, with further stones set on a raised square head.</p>
                        <p class="card-text"><small class="text-muted">Last updated 420 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card2" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/bracelet1.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Lovers Bracelet</h5>
                        <p class="card-text">Our stunning sterling silver Tiffany Lovers Bracelet is a subtle yet smart addition to any jewellery collection. Featuring multiple gorgeous small sterling silver links, this bracelet is the perfect accessory to combine traditional materials with modern design and style.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card2" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/chain2.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Butterfly Chain</h5>
                        <p class="card-text">A timeless pendant that captures the radiance of a butterfly’s wings, illuminated with exceptional white diamonds, totalling ~0.21 carats. Rich in detail, this fine pendant features a marquise-shaped diamond and delicate openwork craftsmanship which allows natural light to beam through the wings, resulting in a pretty sparkle from all angles.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card2" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/earrings1.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Cerith Earrings</h5>
                        <p class="card-text">A delightful pair of earrings crafted into shell shaped patterns, with a beautiful floral diamond set at the base of the earring. The earrings are secured with a set of finely cut diamonds at the tip. Our Cerith Earrings are also perfectly versatile, an ideal pair for any occasion, whether it may be for daily wear or to compliment an evening outfit. </p>
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