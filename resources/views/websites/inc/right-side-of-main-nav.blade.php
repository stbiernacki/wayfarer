<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('websites.right_side_of_main_nav.login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('websites.right_side_of_main_nav.register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">{{ __('websites.right_side_of_main_nav.home') }}</a>
        </li>
    @endguest
</ul>
