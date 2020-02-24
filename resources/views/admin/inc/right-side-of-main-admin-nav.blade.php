<ul class="navbar-nav ml-auto order-1 order-md-3 navbar-no-expand">
    @yield('content_top_nav_right')
    @if(Auth::user())
        <li>
            <a class="nav-link" href="{{ url('/') }}">{{ config('app.name', 'Wayfarer') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="#"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                <i class="fa fa-fw fa-power-off"></i> {{ __('auth.log_out') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                {{ csrf_field() }}
            </form>
        </li>
    @endif
    <li class="nav-item">
        <a
            class="nav-link"
            href="#"
            data-widget="control-sidebar"
            data-scrollbar-theme="os-theme-light"
            data-scrollbar-auto-hide="l"
        >
            <i class="fas fa-cogs"></i>
        </a>
    </li>
</ul>
