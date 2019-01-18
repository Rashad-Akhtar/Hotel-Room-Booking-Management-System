@extends('front_layout.masterpage')

@section('content')
<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('front/images/big_image_1.jpg') }});">
    <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
    <div class="col-md-12 text-center">
    <div class="mb-5 element-animate">
    <h1>{{$hotel->title}}</h1>
    </div>
    </div>
    </div>
    </div>
    </section>
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-md-8">

                <div class="row">

                    <div class="col-md-6">

                          <img src="{{ asset($hotel->image1) }}" alt="image1" height="200" width="300">

                    </div>

                    <div class="col-md-6">

                          <img src="{{ asset($hotel->image2) }}" alt="image2" height="200" width="300">

                    </div>

                </div>
                <br>
                <p style="font-family: 'Ubuntu', sans-serif;">{{ $hotel->description }}</p>

            </div>

            <div class="col-md-4">

                <h4 style="font-family: 'Ubuntu', sans-serif;">Price</h4>
                <p >{{$hotel->price}}</p>
                <h4 style="font-family: 'Ubuntu', sans-serif;">Advance Amount</h4>
                <p>{{$hotel->advance_amount}}</p>

                <form action="{{ route('cart.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $hotel->id }}"> 
                    <button type="submit" class="btn btn-success btn-sm">Book Now</button>
                </form>
                

            </div>

        </div>

    </div>
@endsection