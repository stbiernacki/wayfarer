<?php


namespace App\Http\Middleware;


use App\Models\ApiUser;
use Closure;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class ApiAuth
{
    /**
     * Authorization for users using API
     *
     * @param $request
     * @param Closure $next
     * @return ResponseFactory|Response|mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($request->access_token)) {
            $apiUser = ApiUser::where(
                'token',
                hash('sha256', $request->access_token)
            )->first();

            if (isset($apiUser)) {
                return $next($request);
            }
        }

        return response(__('api.not_authorized'), 401);
    }
}
