<header role="banner">
     
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ route('front.index') }}">LuxuryHotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0" style="font-family: 'Ubuntu', sans-serif;" >
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('front.index') }}">Home</a>
                </li>
                @if (Auth::guard('web')->check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.show') }}">Cart</a>
                </li>    

                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('front.login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('front.registerform') }}">Register</a>
                </li>
                @endif
                
              </ul>
              
            </div>
          </div>
        </nav>
      </header>