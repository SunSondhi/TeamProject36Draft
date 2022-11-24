<!DOCTYPE html>
<html lang="en">

@section('title','| Company Name')
@include('layouts/head')

<body>


    <div class="top-container-homepage">
        @include('layouts/nav')

    </div>



    <div class="main-container">
        <div>
            <h1>HomePage</h1>
        </div>

        @if(Route::is('admin/'))
        <h1>admin Homepage</h1>
        @endif



        <div class="main-content-homepage">
            <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-mdb-interval="1000">
                        <img src="{{asset('images/topimg.jpg')}}" class="d-block w-100" alt="" />
                    </div>
                    <div class="carousel-item" data-mdb-interval="3000">
                        <img src="{{asset('images/img1.jpg')}}" class="d-block w-100" alt="" />
                    </div>
                    <div class="carousel-item" data-mdb-interval="5000">
                        <img src="{{asset('images/img2.jpg')}}" class="d-block w-100" alt="" />
                    </div>
                </div>
                <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/img2.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/img1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/img3.jpg')}}" alt="Third slide">
                </div>
            </div>
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





    @include('layouts/footer')


</body>

</html>