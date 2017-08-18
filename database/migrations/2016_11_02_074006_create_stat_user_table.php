<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stat_user', function (Blueprint $table) {
            $table->increments('id')->comment('每天用户数据汇总');
            $table->integer('register')->default(0)->comment('注册数');
            $table->integer('current')->default(0)->comment('活期');
            $table->integer('project')->default(0)->comment('定期投资数');
            $table->integer('project_one')->default(0)->comment('1月期');
            $table->integer('project_three')->default(0)->comment('3月期');
            $table->integer('project_six')->default(0)->comment('6月期');
            $table->integer('project_twelve')->default(0)->comment('12月期');
            $table->integer('project_jax')->default(0)->comment('九安心');
            $table->integer('project_sdf')->default(0)->comment('闪电付息');
            $table->integer('recharge')->default(0)->comment('充值');
            $table->integer('withdraw')->default(0)->comment('提现');
            $table->integer('refund')->default(0)->comment('回款');
            $table->date('times')->unique()->default('0000-00-00')->comment('时间');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
