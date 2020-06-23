@if (Auth::guest())

@else
    @include('layouts.navbars.navs.auth')
@endif

@if (Auth::guest())
    @include('layouts.navbars.navs.guest')
@endif