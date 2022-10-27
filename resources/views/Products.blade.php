<!DOCTYPE html>
<html lang="en">

@section('title','| Producst')
@include('layouts/head')

<body>
    @include('layouts/nav')



    <h1>Products Page</h1>
    <?php

    use Illuminate\Support\Facades\Route;


    if (Route::currentRouteName() == 'admin.Products') {
        echo 'this is the admin page for products';
    }
    ?>

    <div class="container">
        <div class="flex-container">

            <!--             
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\R.png')}}">
                    <title>Placeholder</title><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images\R.png')}}">
                    <title>Placeholder</title><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <img height="auto" src="{{asset('images\iphone.jpg')}}">
                    <title>Placeholder</title><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" src="{{asset('images\iphone.jpg')}}" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <img height="auto" src="{{asset('images\iphone.jpg')}}"><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->


            <!-- <div>
                <div class="card" style="width: 18rem;">
                    @foreach ($product as $pr)
                    <img src="{{url('images/'.$pr->image)}}" />
                    <title>
                        <td> {{$pr->name}} </td>
                    </title>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">{{$pr->description }}</p>
                        <p class="card-text">{{$pr->price }} </p>

                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <form action="{{ route('HomePage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->get('id') }}" name="id">
                            <input type="hidden" value="{{ $product->get('name') }}" name="name">
                            <input type="hidden" value="{{ $product->get('price')}}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button href="#" class="btn btn-primary">Add To Cart</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div> -->





            <div class="row">
                @foreach($product as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="img_thumbnail">
                        <img src="{{ $product->image }}" alt="">
                        <img src="{{url('images/'.$pr->image)}}" />
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->description }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



        </div>
    </div>
    @include('layouts/footer')

</body>

</html>