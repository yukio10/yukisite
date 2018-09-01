<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\PrefectureInterface;
use App\Models\Prefecture as PrefectureModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Shop
 * @package App\Repositories
 */
class Prefecture implements PrefectureInterface
{
    /**
     * @var PrefectureModel
     */
    private $prefecture;

    /**
     * Shop constructor.
     * @param PrefectureModel $prefecture
     */
    public function __construct(PrefectureModel $prefecture)
    {
        $this->prefecture = $prefecture;
    }

    /**
     * @param int $prefectureId
     * @return Model|null
     */
    public function getByPrefectureId(int $prefectureId): ?Model
    {
        return $this->prefecture->getPrefectureId($prefectureId);
    }

    /**
     * @param string $prefectureName
     * @return Collection
     */
    public function getByPrefectureName(string $prefectureName): Collection
    {
        return $this->prefecture->getByPrefectureName($prefectureName);
    }
}
