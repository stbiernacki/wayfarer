<ul class="navbar-nav">
    <li class="nav-item">
        <a
            class="nav-link"
            data-widget="pushmenu"
            href="#"
            data-enable-remember="true"
        >
            <i class="fas fa-bars"></i>
            <span class="sr-only">{{ __('admin.toggle_navigation') }}</span>
        </a>
    </li>
    @each('admin.menu.menu-top', $manager->getMenu(), 'entry')
    @yield('content_top_nav_left')
</ul>
