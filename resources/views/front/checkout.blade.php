@extends('front_layout.masterpage')

@section('content')

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('front/images/big_image_1.jpg') }});">
    <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
    <div class="col-md-12 text-center">
    <div class="mb-5 element-animate">
    <h1>Checkout</h1>
    </div>
    </div>
    </div>
    </div>
    </section>

    <div class="container mt-4 ">
          @if (Auth::guard('web')->check())
            <p class="text-success">You are ordering as {{ Auth::guard('web')->user()->name }}</p>

            <div class="container mb-4">
                    <div class="row">
                      <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">Your cart</span>
                          <span class="badge badge-secondary badge-pill">{{ count($hotels) }}</span>
                        </h4>
                        <ul class="list-group mb-3">
                          @foreach ($hotels as $key => $hotel)
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $hotel['title'] }}</h6>
                            </div>
                            <span class="text-muted">{{ $hotel['advance_amount'] }}</span>
                          </li>
                          @endforeach
                          
                          <li class="list-group-item d-flex justify-content-between">
                            <span>Total Advance</span>
                            <strong>{{ $total }}</strong>
                          </li>
                        </ul>
              
                      </div>
                      <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Billing address</h4>
                      <form action="{{ route('order') }}" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                              </div>
                            <input type="text" class="form-control" id="username" name="name" value="{{ Auth::guard('web')->user()->name }}" required>
                            </div>
                          </div>
              
                          <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::guard('web')->user()->email }}">
                          </div>

                          <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="email" name="phone" value="{{ Auth::guard('web')->user()->phone }}">
                           </div>
              
                          <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ Auth::guard('web')->user()->address }}" required>
                          </div>
                          <hr class="mb-4">
              
                          <h4 class="mb-3">Payment</h4>
              
                          <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                              <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                              <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                              <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                          </div>
                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                      </div>
                    </div>
          @else
              <p>You Need To Log In First To Order</p>
          @endif
    </div>
    
@endsection