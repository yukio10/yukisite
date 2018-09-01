<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Shop;


/**
 * Class ShopTest
 * @package Tests\Unit
 */
class ShopTest extends TestCase
{



    /**
     * @var Shop
     */
    private $shop;


    public function setUp()
    {
        parent::setUp();
        $this->shop = app()->make(Shop::class);
    }


    /**
     * getByShopIdのテスト
     * @param $shopId
     * @param $expectedShopName
     * @dataProvider shopDataProvider
     */
    public function testGetByShopId($shopId, $expectedShopName)
    {
        $shopModel = $this->shop->getByShopId($shopId);
        $this->assertSame($shopModel->name,$expectedShopName);
    }

    /**
     * @return array
     */
    public function shopDataProvider()
    {
        return [
            [1, '店舗1'],
            [2, '店舗2'],
            [3, '店舗3'],
        ];
    }
}
