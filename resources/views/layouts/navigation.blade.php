<nav class="bg-dark fixed w-full z-50">
    <div class="d-flex justify-content-between align-items-center container">
        <div>
            <a href="{{ route('dashboard') }}">
                <img src="{{asset('images/logo.png')}}" alt="log" width="150px">
            </a>
        </div>
        <div class="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-4">
                <li class="nav-item">
                    <a class="nav-link active  text-white" aria-current="page" href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active  text-white" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active  text-white" aria-current="page" href="#testimonial">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active  text-white" aria-current="page" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <button class="">loging</button>
            <button class="nav-item dropdown btn btn-primary text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">{{ __('Log Out') }}</a></li>
                    </form>
                </ul>
            </button>
        </div>

    </div>
</nav>