@extends('master')

@section('title')
    Unique T-shirts designed by a frog
@endsection


@section('content')

    <div class="section banner">

        <div class="wrapper">

            <img class="hero" src="/img/mike-the-frog.png" alt="Mike the Frog says:">

            <div class="button">
                <a href="/shirts">
                    <h2>Hey, I&rsquo;m Mike!</h2>
                    <p>Check Out My Shirts</p>
                </a>
            </div>

        </div>

    </div>

    <div class="section shirts latest">

        <div class="wrapper">

            <h2>Mike&rsquo;s Latest Shirts</h2>

            <ul class="products">

                @include('partials.shirts')

            </ul>

        </div>

    </div>

@endsection