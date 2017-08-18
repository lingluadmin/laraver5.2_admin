<?php
/**
 * Created by PhpStorm.
 * User: gyl-dev
 * Date: 16/11/2
 * Time: 上午11:52
 * Desc: 按天统计的相关数据
 */

namespace App\Http\Controllers\Admin\Stats;

use App\Http\Controllers\Admin\BaseController;
use App\Logics\Stats\UserLogic;
use App\Models\StatUserModel;
use App\Tools\ToolArray;
use App\Tools\ToolTime;
use Illuminate\Http\Request;

class PerDayController extends BaseController{

    public function operateGroup( Request $request ){

        //如果不传时间,默认为当前时间至前7日
        $sTime = $request->input('start_time', ToolTime::getDateBeforeCurrent(7));

        $eTime = $request->input('end_time', ToolTime::dbDate());

        $data['title'] = $sTime.'至'.$eTime.'统计人数数据展示';

        $logic = new UserLogic();

        $data['list'] = $logic->getOperateGroupByTimes($sTime, $eTime);
        
        $data['times'] = ToolArray::arrayToIds($data['list'], 'times');

        $data['list'] = $logic->formatSeries($data['list']);

        $data['maxNum'] = $logic->getArrayMaxNum($data['list']);

        $data['legend'] = StatUserModel::LEGEND_ARR;

        return view('stats.mix-line-bar', $data);

    }

}