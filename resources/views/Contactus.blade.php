<!DOCTYPE html>
<html lang="en">

@section('title','| Basket')
@include('layouts/head')

<body>
    @include('layouts/nav')
     <style> 
    .invalid-feedback {
    display: block;
    }

      </style>
    <div class="container">
            <h1> Contact Us</h1>
            <form method= "post" action="{{ route('contact.store') }}">
                {{ csrf_field() }}
            <div class ="form-group">
                    <label> Full Name : </label>
                    <input type ="text" class="form-control" name="name">
                    @if ($errors ->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                @endif
                </div>

                <div class ="form-group">
                    <label> Email Address: </label>
                    <input type ="text"class="form-control" name="email">
                    @if ($errors ->has ('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
                </div>
                <div class="form-group">
                    <label>Message: </label>
                    <textarea name="message" class="form-control"></textarea>
                    @if($errors ->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
                    
                    <button class="btn btn-primary">Submit</button>
                
            </form>
            </div>

</body>

        
</html>