<div class="header">
      <div class="container">
        <a href="#" class="logo">happy party</a>
        <a href="#" class="Menu"><i class="icon-menu1"></i></a>
        <div class="nav_Menu">
          <ul>
            <li><a href="{{route('home')}}" class="@if(Request::url() === 'http://localhost:8000/home')active @endif link__Menu">Home</a></li>
            <li><a href="{{route('about')}}" class="@if(Request::url() === 'http://localhost:8000/about')active @endif link__Menu">About</a></li>
            <li>
              <a href="{{route('offer.all')}}" class="@if(Request::url() === 'http://localhost:8000/contactus')active @endif link__Menu">Services</a>
            </li>
            <li>
              <a href="{{route('portfolio')}}" class="@if(Request::url() === 'http://localhost:8000/portfolio')active @endif link__Menu">Portfolio</a>
            </li>
            <li><a href="{{route('contact')}}" class=" @if(Request::url() === 'http://localhost:8000/contact')active @endif link__Menu">Contact</a></li>
            <li><a href="{{route('webblog')}}" class=" @if(Request::url() === 'http://localhost:8000/webblog')active @endif link__Menu">Blog</a></li>
              <a href="#" class="close"><i class="icon-clear"></i></a>

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
                            <li class="nav-item dropdown">


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>

        </div>
      </div>
</div>