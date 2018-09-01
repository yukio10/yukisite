<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Shop extends Model
{
    /**
     * @var string
     */
    protected $table = 'shops';

    /**
     * @param int $shopId
     * @return Model|null
     */
    public function getByShopId(int $shopId): ?Model
    {
        return $this->find($shopId);
    }

    /**
     * @param string $shopName
     * @return Collection
     */
    public function getByShopName(string $shopName): Collection
    {
        return $this->where('name', $shopName)->get();
    }
}
