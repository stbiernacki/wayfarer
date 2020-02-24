@if (is_array($entry))
    <li @if (isset($entry['id'])) id="{{ $entry['id'] }}" @endif class="@if (isset($entry['submenu']))dropdown-submenu @endif">
        <a class="dropdown-item @if (isset($entry['submenu']))dropdown-toggle @endif" href="{{ $entry['href'] }}"
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
