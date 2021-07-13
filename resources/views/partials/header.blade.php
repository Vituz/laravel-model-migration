<div class="container nav_menu">

    <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="Site Logo">
    </div>


    <nav class="menu">
        <ul>
            <li class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{Route::currentRouteName() === 'packages' ? 'active' : ''}}">
                <a href="{{route('packages')}}">Tour Packages</a>
            </li>
        </ul>
    </nav>

</div>