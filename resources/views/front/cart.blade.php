@extends('front_layout.masterpage')

@section('content')

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('front/images/big_image_1.jpg') }});">
    <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
    <div class="col-md-12 text-center">
    <div class="mb-5 element-animate">
    <h1>Cart</h1>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <div class="container mt-4">

            @if (empty($hotels))
                <div class="p-4 text-danger">
                    <p>You Have Not Booked Any Room Yet . Please Book A room</p>
                </div>
            @else

            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Room Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Advance Amount</th>
                        <th scope="col">Due Amount</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody style="color:#991f00">
                        @foreach ($hotels as $key => $hotel)
                        <tr>
                            <td>{{$hotel['title']}}</td>
                            <td>{{$hotel['price']}}</td>
                            <td>{{$hotel['advance_amount']}}</td>
                            <td>{{$hotel['due_price']}}</td>
                            <td>
                                <form action="{{ route('cart.remove')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key }}">
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Total Advance</td>
                            <td>{{$total}} </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                  </table>
                  
                  
                <a href="{{ route('cart.clear') }}" class="btn btn-danger btn-sm">Clear Cart</a>
                <a href="{{ route('checkout') }}" class="btn btn-success btn-sm">Checkout</a>
            @endif

    </div>

@endsection