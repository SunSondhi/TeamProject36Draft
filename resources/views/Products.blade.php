<!DOCTYPE html>
<html lang="en">

@section('title','| Producst')
@include('layouts/head')

<body>
    @include('layouts/nav')


    <div class="intro-page" id="products-page">
        <h1>Products Page</h1>
    </div>



    <?php

    use Illuminate\Support\Facades\Route;


    if (Route::currentRouteName() == 'admin.Products') {
        echo 'this is the admin page for products';
    }
    ?>

    <div class="container">
        <div class="flex-container">
            @foreach($product as $products)
            <div class="card2">
                <div>
                    <img src="{{ $products->image }}" alt="">
                </div>
                <div>
                    <h4>{{ $products->name }}</h4>
                    <p>{{ $products->description }}</p>
                    <p><strong>Price: </strong> {{ $products->price }}$</p>
                </div>
                <div>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $products->id }}" name="id">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->image }}" name="image">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <img src="{{asset('/images/ring1.jpg')}}">
    </div>

    @include('layouts/footer')

</body>

</html>