<!DOCTYPE html>
<html lang="en">

@section('title','| Products')
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


            <div class="row">
                @foreach($product as $products)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="img_thumbnail">
                        <img src="{{ $products->image }}" alt="">
                        <div class="caption">
                            <h4>{{ $products->name }}</h4>
                            <p>{{ $products->description }}</p>
                            <p><strong>Price: </strong> {{ $products->price }}$</p>
                        
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $products->id }}" name="id">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->image }}"  name="image">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                        
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