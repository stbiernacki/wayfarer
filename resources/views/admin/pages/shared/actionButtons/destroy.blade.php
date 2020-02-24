<div class="text-center">
    <div class="btn-group">
        <button
            class="btn btn-sm btn-info dropdown-toggle"
            type="button"
            data-toggle="dropdown"
            aria-expanded="false"
        >
            {{ __('admin.pages.shared.actionButtons.destroy.action') }}
        </button>
        <ul class="dropdown-menu dropdown-menu-right pull-right text-center" role="menu">
            <li>
                <a href="{{ route('admin.apiUsers.index') }}" class="btn btn-xs btn-success">
                    <i class="fa fa-refresh"></i> {{ __('admin.pages.shared.actionButtons.destroy.reset_token') }}
                </a>
            </li>
            <li>
                <form action="{{ route('admin.apiUsers.destroy', $apiUser->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="text" hidden name="id" value="{{ $apiUser->id }}">
                    <button class="btn btn-danger btn-xs" type="submit">
                        <i class="fa fa-trash font-red-sunglo"></i>
                        {{ __('admin.pages.shared.actionButtons.destroy.remove') }}
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
