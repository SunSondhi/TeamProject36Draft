<!DOCTYPE html>
<html lang="en">

@section('title','| Pegasus Jewellery')
@include('layouts/head')

<body>
    @include('layouts/nav')

    <div class="main-container">
        <div>
            <h1>HomePage</h1>
        </div>

        @if(Route::is('admin/'))
            <h1>admin Homepage</h1>
        @endif

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