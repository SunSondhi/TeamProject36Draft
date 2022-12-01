<!DOCTYPE html>
<html lang="en">

@section('title','| Basket')
@include('layouts/head')

<body>
    @include('layouts/nav')
    <div class="intro-page" id="products-page">
        <h1>Basket Page</h1>
    </div>
    

    <main class="card2" class="my-8">
        <div  class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                    @endif
                    <h3 class="text-3xl font-bold">Carts</h3>
                    <div class="flex-1">
                        <table  class="w-full text-sm lg:text-base" cellspacing="0">
                            <thead>
                                <tr class="h-12 uppercase">
                                    <th class="hidden md:table-cell"></th>
                                    <th class="text-left">Name</th>
                                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                                        <span class="lg:hidden" title="Quantity">Qtd</span>
                                        <span class="hidden lg:inline">Quantity</span>
                                    </th>
                                    <th class="hidden text-right md:table-cell"> price</th>
                                    <th class="hidden text-right md:table-cell"> Remove </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($cartItems as $cartItems):?>
                                <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                        <a>
                                            <img src="{{ $cartItems->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="font-bold">{{ $cartItems->name }}</p>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">

                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $cartItems->id}}">
                                                    <button class="px-4 py-2 text-black shadow rounded-full">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            ${{ $cartItems->price }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $cartItems->id }}" name="id">
                                            <button class="px-4 py-2 text-black shadow rounded-full">x</button>
                                        </form>

                                    </td>
                                    <td>

                                    <form action="{{ route('storePrevOrders') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="name" value="{{ $cartItems->name}}">
                                        <input type="hidden" name="price" value="{{ $cartItems->price}}">
                                        <input type="hidden" name="image" value="{{ $cartItems->attributes->image}}">
                                        <button class="px-4 py-2 text-white shadow rounded-full bg-green-500">Checkout</button>
                                </form>
                                    </td>
                                </tr>


                                
                                
                                @endforeach

                            </tbody>
                        </table>
                        <div>
                            <h1> Total: ${{ Cart::getTotal() }} </h1>
                        </div>
                        <div>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="px-4 py-2 text-white shadow rounded-full bg-red-500">Clear Carts</button>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts/footer')

</body>
</html>