<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id')->comment('文章表');
            $table->char('title')->default('')->comment('标题');
            $table->char('thumb_img')->default('')->comment('缩略图');
            $table->char('intro')->default('')->comment('介绍');
            $table->char('keywords')->default('')->comment('关键字-SEO');
            $table->char('description')->default('')->comment('描述-SEO');
            $table->integer('cat_id')->index()->default(0)->comment('分类id');
            $table->integer('hits')->default(0)->comment('点击次');
            $table->integer('sort')->index()->default(0)->comment('排序,越大越靠前');
            $table->integer('is_top')->default(0)->comment('是否最顶');
            $table->integer('is_push')->default(0)->comment('是否推送');
            $table->integer('status')->default(100)->comment('状态:100未发布,200已发布');
            $table->timestamp('publish_at')->index()->default('0000-00-00 00:00:00');
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
