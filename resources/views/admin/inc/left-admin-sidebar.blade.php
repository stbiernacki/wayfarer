<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img
            src="{{ asset('assets/img/logo.png') }}"
            alt="Admin"
            class="brand-image img-circle elevation-3"
            style="opacity: .8"
        >
        <span class="brand-text font-weight-light">
            <b>{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</b>
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu"
                data-animation-speed="300"
                data-accordion="true"
            >
                @each('admin.menu.menu', $manager->getMenu(), 'entry')
            </ul>
        </nav>
    </div>
</aside>
