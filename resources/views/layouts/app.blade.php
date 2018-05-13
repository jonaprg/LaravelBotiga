@include('store.partials.head')
@include ('store.partials.nav')
<div id="auth">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login') }}" >Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</div>
@include ('store.partials.footer')
