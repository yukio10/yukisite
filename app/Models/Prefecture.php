<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Prefecture extends Model
{
    /**
     * @var string
     */
    protected $table = 'prefectures';

    /**
     * @param int $prefectureId
     * @return Model|null
     */
    public function getByPrefectureId(int $prefectureId): ?Model
    {
        return $this->find($prefectureId);
    }

    /**
     * @param int $prefectureId
     * @return Model
     * @throws ModelNotFoundException
     */
    public function findOrFailByPrefectureId(int $prefectureId): Model
    {
        return $this->findOrFail($prefectureId);
    }

    /**
     * @param string $prefectureName
     * @return Collection
     */
    public function getByPrefectureName(string $prefectureName): Collection
    {
        return $this->where('name', $prefectureName)->get();
    }
}
