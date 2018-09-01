<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

Interface PrefectureInterface
{

    /**
     * @param int $prefectureId
     * @return Model|null
     */
    public function getByPrefectureId(int $prefectureId): ?Model;

    /**
     * @param string $prefectureName
     * @return Collection
     */
    public function getByPrefectureName(string $prefectureName): Collection;
}
