<!DOCTYPE html>
<html lang="en">

@section('title','| Basket')
@include('layouts/head')

<body>
    @include('layouts/nav')

    <h1>About Us page</h1>

    <h1>Results</h1>

    <div class="main-content">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                <tr>
                    <td> {{$us->name}} </td>
                    <td> {{$us->email }} </td>
                    <td> {{$us->role }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="sections">
            <a href="{{ redirect()->back()->getTargetUrl() }}"><button>Go back</button></a>
        </div>
    </div>


</body>

</html>