<?php


namespace App\Http\Api\Controllers;


use App\Models\StockStatus;
use Symfony\Component\HttpKernel\Exception\HttpException;

class StockStatusesController
{
    /**
     * Allows to retrieve the external stock status.
     *
     * @SWG\Get(
     *     path="/stockStatuses",
     *     summary="Allows to retrieve stock status",
     *     tags={"Stock Status"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Not authorized",
     *     ),
     *     security={
     *       {"access_token": {}}
     *     }
     * )
     *
     * @throws HttpException
     */
    public function index()
    {
        $stockStatuses = StockStatus::all();
        if (!empty($stockStatuses->toArray())) {
            return json_encode($stockStatuses);
        }
        return response(__('api.stock_status.index'), 200);
    }

    /**
     * Allows to store stock status.
     *
     * @SWG\Post(
     *     path="/stockStatuses",
     *     summary="Allows to store stock status",
     *     tags={"Stock Status"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="list of stock objects",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/stockStatuses")
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Not authorized",
     *     ),
     *     @SWG\Response(
     *         response="422",
     *         description="Unprocessable Entity",
     *     ),
     *     security={
     *       {"access_token": {}}
     *     }
     * )
     *
     * @throws HttpException
     */
    public function store()
    {
        $this->validateData();
        $stockStatus = StockStatus::updateOrCreate(
            ['external_id'=> request('external_id')], request()->all()
        );
        if ($stockStatus->id > 0 ) {
            return response(__('api.stored'), 200);
        }
        return response(__('api.not_saved'), 203);
    }

    /**
     * Allows to store stock in batch request.
     *
     * @SWG\Post(
     *     path="/stockStatuses/batch",
     *     summary="Allows to store stock status",
     *     tags={"Stock Status"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="list of stock objects",
     *         required=true,
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/stockStatuses")
     *         )
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful Operation",
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Not authorized",
     *     ),
     *     @SWG\Response(
     *         response="422",
     *         description="Unprocessable Entity",
     *     ),
     *     security={
     *       {"access_token": {}}
     *     }
     * )
     *
     * @throws HttpException
     */
    public function batch()
    {
        foreach (json_decode(request()->getContent(), true) as $data) {
            $stockStatus = StockStatus::updateOrCreate(
                ['external_id'=> $data['external_id']], $data
            );
            if ($stockStatus->id > 0 ) {
                continue;
            } else {
                return response(__('api.not_saved'), 203);
            }
        }
        return response(__('api.stored'), 200);
    }

    private function validateData(): void
    {
        \request()->validate([
            'external_id' => ['required', 'unique:stock_statuses'],
            'code' => ['required', 'unique:stock_statuses'],
        ]);
    }

}
