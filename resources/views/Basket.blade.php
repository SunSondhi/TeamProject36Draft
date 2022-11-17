<!DOCTYPE html>
<html lang="en">

@section('title','| Basket')
@include('layouts/head')

<body>
    @include('layouts/nav')
    <h1>Basket Page</h1>
    <main class="my-8">



        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>



            @foreach($items as $items)

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="img_thumbnail">
                    <img src="{{ $items->image }}" alt="">
                    <img src="{{url('images/'.$items->image)}}" />
                </div>
            </div>
            @endforeach


    </main>
</body>

</html>