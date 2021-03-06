<nav class="navbar navbar-expand-md navbar-light bg-darkblue shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
           <img src="https://academy.findworka.com/uploads/system/logo-dark.png" width="45%" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/courses/all')}}">Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Careers</a>
                </li>
              </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Signup') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdown-menu-right">My Courses </a>
                            <a  href="{{url('/submissions')}}" class="dropdown-item dropdown-menu-right">Assignments</a>
                            <a href="{{url('/home')}}" class="dropdown-item dropdown-menu-right">View Profile</a>
                            <a href="/profile/{{Auth::user()->id}}/edit" class="dropdown-item dropdown-menu-right">Edit Profile</a>
                            <a class="dropdown-item dropdown-menu-right">Purhase History</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>