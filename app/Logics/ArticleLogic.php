<?php
/**
 * Created by PhpStorm.
 * User: gyl-dev
 * Date: 16/10/31
 * Time: 下午5:47
 */

namespace App\Logics;

use App\Models\ArticleModel;

class ArticleLogic extends BaseLogic{

    protected $model = '';

    public function __construct()
    {

        $this->model = new ArticleModel();

    }

    public function getListByWhere($where=[]){

        $model = $this->model;

        if( isset($where['id']) ){

            $model->Id($where['id']);

        }

        if( isset($where['status']) ){

            $model->Status($where['status']);

        }

        if( isset($where['title']) ){

            $model->Title($where['title']);

        }

        if( isset($where['cat_id']) ){

            $model->CatId($where['cat_id']);

        }

        if( isset($where['cat_id']) ){

            $model->PublishTime($where['cat_id']);

        }


        $offset = self::getOffset($where['page'], $where['size']);

        return $model->orderBy('is_top', 'desc')
            ->orderBy('sort', 'desc')
            ->paginate($offset);

    }


    public function doAdd($data){

        

    }


}