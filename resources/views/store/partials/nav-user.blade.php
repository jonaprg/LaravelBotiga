
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
            <ul class="my-2 my-sm-0 navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile  {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#">Ajustes</a>
                    </div>
                </li>
            </ul>
    
            <li id="logout" class="btn btn-secondary my-2 my-sm-0" type="submit"><a href="{{route('logout')}}">Logout</a></li>
        </div>
    </nav>
</header>
