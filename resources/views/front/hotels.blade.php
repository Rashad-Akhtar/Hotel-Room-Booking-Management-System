@extends('front_layout.masterpage')

@section('content')

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('front/images/big_image_1.jpg') }});">
    <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
    <div class="col-md-12 text-center">
    <div class="mb-5 element-animate">
    <h1>Our Rooms</h1>
    <p>Discover Our Luxurious Rooms.</p>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <section class="site-section">
    <div class="container">
    <div class="row">
    @foreach ($hotels as $hotel)
            <div class="col-md-4 mb-4">
            <div class="media d-block room mb-0">
            <figure>
            <img src="{{ asset($hotel->image1) }}" alt="Generic placeholder image"  height="200" width="350">
            </figure>
            <div class="media-body">
            <h3 class="mt-0"><a href="{{route('front.hotel_details',['id'=>$hotel->id])}}">{{ $hotel->title }}</a></h3>
            <ul class="room-specs">
            <li>Price</li>    
            <li>${{ $hotel->price }}</li>
            </ul>
            <a href="{{route('front.hotel_details',['id'=>$hotel->id])}}" class="btn btn-success btn-sm">View Details</a><br><br>
            <form action="{{ route('cart.add')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $hotel->id }}">
                <button type="submit" class="btn btn-primary btn-sm">Book Now From ${{$hotel->advance_amount}}</button>
            </form>
            </div>
            </div>
            </div>
    @endforeach
    
    </div>
    </div>
    </section>
    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
    <div class="container">
    <div class="row justify-content-center align-items-center intro">
    <div class="col-md-9 text-center element-animate">
    <h2>Relax and Enjoy your Holiday</h2>
    <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
    <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
    </div>
    </div>
    </div>
    </section>
    
@endsection