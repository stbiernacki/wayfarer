<?php


namespace Tests\Unit\Http\Api\Common;


use App\Models\ApiUser;

trait ApiTestNucleus
{
    /**
     * @return string
     */
    public function createAccessToken() :string
    {
        $accessToken = bin2hex(openssl_random_pseudo_bytes(20));
        ApiUser::create([
            'name'          => 'api_test',
            'description'   => 'api_test',
            'token'         => hash('sha256', $accessToken),
        ]);
        return 'access_token=' . $accessToken;
    }

    public function deleteAccessToken()
    {
        ApiUser::where('name', 'api_test')->delete();
    }

    /**
     * @param string $model
     * @return array
     */
    public function data(string $model) : array
    {
        return require __DIR__ . '/Data/data' . $model . '.php';
    }

    public function msg()
    {
        return [
            'not_authorized'        => __('api.not_authorized'),
            'stored'                => __('api.stored'),
            'not_saved'             => __('api.not_saved'),
            'stock_status_empty'    => __('api.stock_status.index')
        ];
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $_SERVER['APP_URL'] . '/api/';
    }
}
