 
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        <a class="navbar-brand brand-logo" href="{{route('admin.dashboard')}}"><img src="images/nft-market-logo.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard')}}"><img src="images/nft-market-logo.jpg" alt="logo"/></a>
        <strong class="mb-0 font-weight-normal float-left dropdown-header">NFT Market</strong>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
       
      </div>  
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100">
        <form method="GET" action="{{route('admin.nfts.search')}}" class="search-form d-none d-md-block">
          <i class="mdi mdi-magnify"></i>
          <input type="text" name="search" class="form-control" placeholder="Search Here">
        </form>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
        <li class="nav-item nav-profile dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
            <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
          </a>

          <div class="nav-item nav-logout d-none d-lg-block">
            

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>

        </li>
            @endguest
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
