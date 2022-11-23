@include('layouts/head')

<div class="nav-container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <!-- add the logo here-->
            <img class="logo" width="100%" height="200px" src="{{ asset('images\pegasusLogo.png')}}">
        </a>

        <?php

        use GuzzleHttp\Middleware;
        use Illuminate\Support\Facades\Route;
        use Illuminate\Support\Facades\Auth;
        ?>

        <!-- @if (Auth::user() && Auth::user()->role == 'admin')
        'THIS IS WHAT I WANT ONLY ADMIN USERS TO SEE!'
        @endif -->


        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-10 text-small">
            <li>
                <?php
                if (Auth::check() && Auth::user()->role == '1') {
                ?>
                    <a href="{{ route('admin.HomePage') }}" class="nav-link text-secondary">Home</a>
                <?php
                } else {
                ?>
                    <a href="{{ route('HomePage') }}" class="nav-link text-secondary">Home</a>
                <?php
                }
                ?>
            </li>
            <li>
                <?php
                if (Auth::check() && Auth::user()->role == '1') {
                ?>
                    <a href="{{ route('admin.Products') }}" class="nav-link text-secondary">Products</a>

                <?php
                } else {
                ?>
                    <a href="{{ route('Products') }}" class="nav-link text-secondary">Products</a>

                <?php
                }
                ?>
            </li>
            <li>
                <?php
                if (Auth::check() && Auth::user()->role == '1') {
                ?>
                    <a href="{{ route('admin.Basket') }}" class="nav-link text-secondary">Basket</a>

                <?php
                } else {
                ?>
                    <a href="{{ route('Basket') }}" class="nav-link text-secondary">Basket</a>

                <?php
                }
                ?>
            </li>
            <li>
                <?php
                if (Auth::check() && Auth::user()->role == '1') {
                ?>
                    <a href="{{ route('admin.Aboutus') }}" class="nav-link text-secondary">About Us</a>

                <?php
                } else {
                ?>
                    <a href="{{ route('Aboutus') }}" class="nav-link text-secondary">About Us</a>

                <?php
                }
                ?>
            </li>
            <li>
                <?php
                if (Auth::check() && Auth::user()->role == '1') {
                ?>
                    <a href="{{ route('admin.Contactus') }}" class="nav-link text-secondary">Contact Us</a>

                <?php
                } else {
                ?>
                    <a href="{{ route('Contactus') }}" class="nav-link text-secondary">Contact Us</a>

                <?php
                }
                ?>
            </li>
        </ul>
    </div>
</div>

<div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-around">
        <div class="w-50 input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
        <div class="text-end">
            <?php
            if (Auth::check() && Auth::user()->role == '1') {
            ?>
                <a href="{{ route('admin.adminhome') }}"><button type="button" class="btn btn-light text-dark me-2">Login</button></a>
                <a href="{{ route('admin.adminhome')}}"><button type="button" class="btn btn-primary">Sign-up</button></a>

            <?php
            } else {
            ?>
                <a href="{{ route('login') }}"><button type="button" class="btn btn-light text-dark me-2">Login</button></a>
                <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Sign-up</button></a>

            <?php
            }
            ?>

        </div>
    </div>
</div>