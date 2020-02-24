<?php

namespace App\Http\Controllers\ApiUser;

use App\Http\Controllers\Admin\AdminController;
use App\Models\ApiUser;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class ApiUsersController
 * @package App\Http\Controllers\ApiUser
 */
class ApiUsersController extends AdminController
{
    /**
     * Displays the main page for api users
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.pages.apiUsers.index');
    }

    /**
     * Store a newly created api user in storage.
     *
     * @return Factory|View
     */
    public function store()
    {
        $data = \request()->all();
        $token = $this->generateAccessToken();
        $data['token'] = hash('sha256', $token);

        ApiUser::create($data);
        return view('admin.pages.apiUsers.token-confimation', compact('token'));
    }

    /**
     * Remove the specified api user from storage.
     *
     * @return Factory|View
     */
    public function destroy()
    {
        ApiUser::destroy(\request('id'));
        return redirect(route('admin.apiUsers.index'));
    }


    /**
     * Get Api Users data for tables (via jQuery DataTables).
     *
     * @return mixed
     * @throws \Exception
     */
    public function datatable()
    {
        return Datatables::of(ApiUser::query())
            ->addColumn('action', function ($apiUser) {
                return view('admin.pages.shared.actionButtons.destroy', ['apiUser' => $apiUser]);
            })
            ->make(true);
    }

    /**
     * Generate access token for api user
     *
     * @return string
     */
    private function generateAccessToken()
    {
        return bin2hex(openssl_random_pseudo_bytes(20));
    }
}
