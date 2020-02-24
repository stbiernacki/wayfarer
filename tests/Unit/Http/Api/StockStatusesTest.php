<?php


namespace Tests\Unit\Http\Api;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use StockStatusesTableSeeder;
use Tests\TestCase;
use Tests\Unit\Http\Api\Common\ApiTestNucleus;

class StockStatusesTest extends TestCase
{
    use ApiTestNucleus, RefreshDatabase;

    /**  @var string **/
    private $accessToken;

    protected function setUp(): void
    {
        parent::setUp();
        $this->accessToken = $this->createAccessToken();
    }

    /** @test */
    public function has_api_users_table()
    {
        $this->assertTrue(Schema::hasTable('api_users'));
    }

    /** @test */
    public function has_stock_statuses_table()
    {
        $this->assertTrue(Schema::hasTable('stock_statuses'));
    }

    /**
     * @covers \App\Http\Api\Controllers\StockStatusesController::index()
     * @test
     */
    public function not_authorized()
    {
        // GET /api/stockStatuses
        $this->getJson( $this->url())
            ->assertStatus(401)
            ->assertSeeText($this->msg()['not_authorized']);
    }

    /**
     * @covers \App\Http\Api\Controllers\StockStatusesController::index()
     * @test
     */
    public function is_authorized_stock_status_empty()
    {
        // GET /api/stockStatuses
        $this->getJson( $this->url() . '?' . $this->accessToken)
            ->assertStatus(200)
            ->assertSeeText($this->msg()['stock_status_empty']);
    }

    /**
     * @covers \App\Http\Api\Controllers\StockStatusesController::index()
     * @test
     */
    public function is_authorized_stock_status_not_empty()
    {
        $this->seed(StockStatusesTableSeeder::class);
        // GET /api/stockStatuses
        $this->getJson( $this->url() . '?' . $this->accessToken)
            ->assertStatus(200);
    }

    /**
     * @covers \App\Http\Api\Controllers\StockStatusesController::store()
     * @test
     */
    public function store_data_into_database()
    {
        // POST /api/stockStatuses
        $this->postJson($this->url() . '?' . $this->accessToken, $this->data('StockStatus')['store'])
            ->assertStatus(200)->assertSeeText($this->msg()['stored']);
    }

    /**
     * @covers \App\Http\Api\Controllers\StockStatusesController::batch()
     * @test
     */
    public function store_data_into_database_batch_type()
    {
        // POST /api/stockStatuses/batch
        $this->postJson($this->url() . '/batch?' . $this->accessToken, $this->data('StockStatus')['batch'])
            ->assertStatus(200)->assertSeeText($this->msg()['stored']);
    }

    /**
     * Returns the basic core of the url.
     *
     * @return string
     */
    protected function url()
    {
        return $this->getApiUrl() .  'stockStatuses';
    }
}
