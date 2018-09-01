<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\ShopInterface;
use App\Models\Shop as ShopModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Shop
 * @package App\Repositories
 */
class Shop implements ShopInterface
{
    /**
     * @var ShopModel
     */
    private $shop;

    /**
     * Shop constructor.
     * @param ShopModel $shop
     */
    public function __construct(ShopModel $shop)
    {
        $this->shop = $shop;
    }

    /**
     * @param int $shopId
     * @return Model|null
     */
    public function getByShopId(int $shopId): ?Model
    {
        return $this->shop->getByShopId($shopId);
    }

    /**
     * @param string $shopName
     * @return Collection
     */
    public function getByShopName(string $shopName): Collection
    {
        return $this->shop->getByShopName($shopName);
    }
}
