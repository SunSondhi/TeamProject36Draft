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

      

            <div>
                <div class="card" style="width: 18rem;">
                    @foreach ($product as $pr)
                    <img height="auto" src="{{asset('images/'.$pr->image)}}">
                    <title>
                        <td> {{$pr->name}} </td>
                    </title>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">{{$pr->description }}</p>
                        <p class="card-text">{{$pr->price }} </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>

                    </div>
                    @endforeach
                </div>
            </div>

            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $product->get('name') }}</h3>
                <span class="mt-2 text-gray-500">{{ $product->get('price') }}</span>
                <img height="auto" src="{{asset('images/'.$pr->image)}}">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->get('id') }}" name="id">
                    <input type="hidden" value="{{ $product->get('name') }}" name="name">
                    <input type="hidden" value="{{ $product->get('price')}}" name="price">
                    <input type="hidden" value="{{ $product->get('image') }}" name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                </form>
            </div>


        </div>
    </div>
    @include('layouts/footer')

</body>

</html>