<?php
/**
 * Created by PhpStorm.
 * User: gyl-dev
 * Date: 16/11/2
 * Time: 上午11:48
 * Desc: 用户数据相关
 */

namespace App\Logics\Stats;

use App\Logics\BaseLogic;
use App\Models\StatUserModel;
use App\Tools\ToolArray;
use App\Tools\ToolTime;

class UserLogic extends BaseLogic{

    protected $sTime = '';
    protected $eTime = '';
    protected $modelStatUser = '';

    /**
     * @param $sTime
     * @param $eTime
     * @desc 运营部：
    1、每天的注册人数
    2、零钱计划主动投资人数，定期投资人数
    3、每天的充值金额
    4、各类项目投资金额：零钱计划、九省心一月期、三月期、六月期、十二月期、九安心、闪电付息六月期、闪电付息十二月期
     */
    public function getOperateGroupByTimes($sTime, $eTime){

        $model = new StatUserModel();

        return $model->BetweenTime($sTime, $eTime)
            ->get()
            ->toArray();


    }

    /**
     * @param $data
     * @return array
     * @desc 格式化输出
     */
    public function formatSeries($data){

        if( empty($data) ){

            return [];

        }

        $return = [];

        $legendArr = StatUserModel::LEGEND_ARR;

        $keys = array_keys($legendArr);

        foreach ($keys as $key){

            $return[$legendArr[$key]] = ToolArray::arrayToIds($data, $key);

        }

        return $return;

    }

    /**
     * @param $data
     * @return int|mixed
     * @desc 获取数组中最大的一个值
     */
    public function getArrayMaxNum($data){

        return empty($data) ? 1 : max(array_map(function($item){

                return max($item);

            }, $data)) + 50;

    }

}