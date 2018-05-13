@if(Auth::check())
    @include('store.partials.nav-user')
@else
    @include('store.partials.nav-home')
@endif