@if(isset($entry['topnav']) && $entry['topnav'])
    @if (isset($entry['search']) && $entry['search'])
        <form action="{{ $entry['href'] }}" method="{{ $entry['method'] }}" class="form-inline ml-2 mr-2">
            <div class="input-group">
                <input class="form-control form-control-navbar" type="search" name="{{ $entry['input_name'] }}" placeholder="{{ $entry['text'] }}" aria-label="{{ $entry['aria-label'] ?? $entry['text'] }}">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    @elseif (is_array($entry))
        <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif class="nav-item {{ $entry['top_nav_class'] }}">
            <a class="nav-link @if (isset($entry['submenu']))dropdown-item dropdown-toggle @endif" href="{{ $entry['href'] }}"
               @if (isset($entry['submenu'])) data-toggle="dropdown" @endif
               @if (isset($entry['target'])) target="{{ $entry['target'] }}" @endif
            >
                <i class="{{ $entry['icon'] ?? 'far fa-fw fa-circle' }} {{ isset($entry['icon_color']) ? 'text-' . $entry['icon_color'] : '' }}"></i>
                {{ $entry['text'] }}

                @if (isset($entry['label']))
                    <span class="badge badge-{{ $entry['label_color'] ?? 'primary' }}">{{ $entry['label'] }}</span>
                @endif
            </a>
            @if (isset($entry['submenu']))
                <ul class="dropdown-menu border-0 shadow">
                    @each('admin.menu.menu-sub-top', $entry['submenu'], 'entry')
                </ul>
            @endif
        </li>
    @endif
@endif
