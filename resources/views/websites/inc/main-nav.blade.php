<nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Wayfarer') }}
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @include('websites.inc.left-side-of-main-nav')

            @include('websites.inc.right-side-of-main-nav')

        </div>
    </div>
</nav>
