<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Prefecture;


/**
 * Class PrefectureTest
 * @package Tests\Unit
 */
class PrefectureTest extends TestCase
{

    /**
     * @var Prefecture
     */
    private $prefecture;

    /**
     * SetUp
     */
    public function setUp()
    {
        parent::setUp();
        $this->prefecture = app()->make(Prefecture::class);
    }

//    /**
//     * getByPrefectureIdの境界テスト
//     * 存在する都道府県の場合
//     * @param $prefectureId
//     * @param $expectedPrefectureName
//     * @dataProvider shopDataProvider
//     */
//    public function testGetByPrefectureId($prefectureId, $expectedPrefectureName)
//    {
//        $prefectureModel = $this->prefecture->getByPrefectureId($prefectureId);
//        $this->assertSame($prefectureModel->name,$expectedPrefectureName);
//    }

    /**
     * findOrFailByPrefectureIdのテスト
     * 存在しない都道府県の場合例外を投げる
     * @expectedException Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function testFindOrFailByPrefectureId()
    {
        $notExistPrefectureId = 999;
        return $this->prefecture->findOrFailByPrefectureId($notExistPrefectureId);
    }

    /**
     * @return array
     */
    public function shopDataProvider()
    {
        return [
            [1, '北海道'],
//            [2, '青森県'],
//            [46, '鹿児島県'],
            [47, '沖縄県'],
        ];
    }
}
