<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand">JRG Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item" >

                    <a class="nav-link " href="{{route('cart-show')}}" ><i class="fa fa-shopping-cart"></i></a>
                    
                </li>
            </ul>
            <ul class="my-2 my-sm-0 navbar-nav"></ul>
            <li id="logout" class="btn btn-secondary my-2 my-sm-0" type="submit"><a href="{{route('login') }}">Login</a></li>
            <li class="btn btn-secondary my-2 my-sm-0" type="submit"><a href="{{route('register') }}">Register</a></li>
        </div>
    </nav>
</header>
