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
            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive" /></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>

                    <td class="actions" data-th="">
                        @csrf
                        <a href="{{ route('remove_from_cart') }}"><button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button></a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3><strong>Total ${{ $total }}</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                        <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
                    </td>
                </tr>
            </tfoot>
        </table>



        <table>
            <thead>
                <tr>

                </tr>
            </thead>
            <tbody>
                @foreach( $items as $items)
                <tr>
                    <td> {{$items->name}} </td>
                    <td> {{$items->price }} </td>
                    <td>
                        <div class="col-sm-3 hidden-xs"><img src="{{ $items->image }}" width="100" height="100" class="img-responsive" /></div>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <h3><strong>Total ${{ $total }}</strong></h3>
                </tr>
            </tfoot>

        </table>



    </main>
</body>

</html>