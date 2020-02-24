<?php


namespace App\Http\Api\Models;


/**
 * App\Http\Api\Models\StockStatus
 *
 * @SWG\Definition(
 *     definition="stockStatuses",
 *     type="object",
 *     required={
 *         "external_id",
 *         "code",
 *     },
 * )
 */
class StockStatus
{
    /**
     * The unique external identifier of the stock status in the external catalog.
     *
     * @SWG\Property(
     *     format="intGrZ",
     * )
     * @var integer
     */
    public $external_id;

    /**
     * Code (unique)
     *
     * @SWG\Property(
     *     format="string",
     *     example="EXT-001",
     * )
     * @var string
     */
    public $code;

    /**
     * Name
     *
     * @SWG\Property(
     *     format="string",
     *     example="lorem ipsum",
     * )
     * @var string
     */
    public $name;

    /**
     * Description
     *
     * @SWG\Property(
     *     format="string",
     *     example="lorem ipsum",
     * )
     * @var string
     */
    public $description;

    /**
     * Quantity
     *
     * @SWG\Property(
     *     format="decimal(10.4)"
     * )
     * @var number
     */
    public $quantity;
}
