<?php
/**
 * Created by PhpStorm.
 * User: gyl-dev
 * Date: 16/11/2
 * Time: 下午12:01
 * Desc: 用户相关数据
 */

namespace App\Models;

class StatUserModel extends CommonScopeModel{

    protected $table = 'stat_user';


    const LEGEND_ARR = [
        "register"          => '注册',
        "current"           => '活期',
        "project"           => '定期',
        "project_one"       => '1月期',
        "project_three"     => '3月期',
        "project_six"       => '6月期',
        "project_twelve"    => '12月期',
        "project_jax"       => '九安心',
        "project_sdf"       => '闪电付息',
        "recharge"          => '充值',
        "withdraw"          => '提现',
        "refund"            => '回款',
    ];



}