<?php
/**
 * Created by PhpStorm.
 * User: gyl-dev
 * Date: 16/11/2
 * Time: 下午12:02
 * Desc: 公共查询条件类
 */

namespace App\Models;

class CommonScopeModel extends BaseModel{

    public function scopeId($query, $id){

        return $id ? $query->where('id', $id) : $query;

    }

    public function scopeTitle($query, $title){

        return $title ? $query->where('title', 'like', '%'.$title.'%') : $query;

    }

    public function scopeCatId($query, $catId){

        return $catId ? $query->where('cat_id', $catId) : $query;

    }

    public function scopeStatus($query, $status=200){

        return $status ? $query->where('status', $status) : $query;

    }

    public function scopePublishTime($query, $publishTime){

        return $publishTime ? $query->where('publish_at', $publishTime) : $query;

    }

    public function scopeBetweenTime($query, $sTime, $eTime){

        return $query->whereBetween('times', [$sTime, $eTime]);

    }


    public function scopeBetweenCreatedAt($query, $eTime){

        return $query->whereBetween('created_at', $eTime);

    }

}