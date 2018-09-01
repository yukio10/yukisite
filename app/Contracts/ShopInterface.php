<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

Interface ShopInterface
{

    /**
     * @param int $shopId
     * @return Model|null
     */
    public function getByShopId(int $shopId): ?Model;

    /**
     * @param string $shopName
     * @return Collection
     */
    public function getByShopName(string $shopName): Collection;
}
