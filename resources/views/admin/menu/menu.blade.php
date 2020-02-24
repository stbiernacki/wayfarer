@if (!isset($entry['topnav']))

    @if (is_string($entry))

        <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif class="nav-header">{{ $entry }}</li>

    @elseif (isset($entry['header']))

        <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif class="nav-header">{{ $entry['header'] }}</li>

    @elseif (isset($entry['search']) && $entry['search'])

        <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif>
            <form action="{{ $entry['href'] }}" method="{{ $entry['method'] }}" class="form-inline">
                <div class="input-group">
                    <input
                        class="form-control form-control-sidebar"
                        type="search" name="{{ $entry['input_name'] }}"
                        placeholder="{{ $entry['text'] }}"
                        aria-label="{{ $entry['aria-label'] ?? $entry['text'] }}"
                    >
                    <div class="input-group-append">
                        <button class="btn btn-sidebar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </li>
    @else

        <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif class="nav-item @if (isset($entry['submenu'])){{ $entry['submenu_class'] }}@endif">

            <a class="nav-link {{ $entry['class'] }}" href="{{ $entry['href'] }}"
               @if (isset($entry['target'])) target="{{ $entry['target'] }}" @endif
            >
                <i class="{{ $entry['icon'] ?? 'far fa-fw fa-circle' }} {{ isset($entry['icon_color']) ? 'text-' . $entry['icon_color'] : '' }}"></i>
                <p>
                    {{ $entry['text'] }}

                    @if (isset($entry['submenu']))
                        <i class="fas fa-angle-left right"></i>
                    @endif
                    @if (isset($entry['label']))
                        <span class="badge badge-{{ $entry['label_color'] ?? 'primary' }} right">{{ $entry['label'] }}</span>
                    @endif
                </p>
            </a>
            @if (isset($entry['submenu']))
                <ul class="nav nav-treeview">

                    @each('admin.menu.menu', $entry['submenu'], 'entry')

                </ul>
            @endif
        </li>

    @endif


@endif
