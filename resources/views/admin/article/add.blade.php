@extends('layouts.admin-app')

@section('content')
    <div class="pageheader">
        <h2><i class="fa fa-home"></i> 当前位置: <span> {{ $title or null }} </span></h2>
    </div>

    <div class="contentpanel">

        <div class="row">


            <div class="col-sm col-lg">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns">
                            <a href="" class="panel-close">×</a>
                            <a href="" class="minimize">−</a>
                        </div>
                        <h4 class="panel-title">表单信息</h4>
                    </div>

                    <form class="form-horizontal form-bordered" action="" method="POST">

                        <div class="panel-body panel-body-nopadding">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">分类</label>

                                <div class="col-sm-1">
                                    <select class="form-control input-sm" name="cat_id">
                                        <option value="0" >请选择分类</option>
                                        <option value="1" >是</option>
                                        <option value="2" >否</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">标题 <span class="asterisk">*</span></label>

                                <div class="col-sm-6">
                                    <input type="text"  data-toggle="tooltip" name="title" data-trigger="hover" class="form-control tooltips" data-original-title="请填写标题" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">内容 <span class="asterisk">*</span></label>

                                <div class="col-sm-6">
                                    <input type="text"  data-toggle="tooltip" name="title" data-trigger="hover" class="form-control tooltips" data-original-title="请填写标题" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">缩略图</label>

                                <div class="col-sm-6">
                                    <input type="file"  data-toggle="tooltip" name="thumb" data-trigger="hover" class="form-control tooltips" data-original-title="缩略图,不上传则显示默认图片" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">附件</label>

                                <div class="col-sm-6">
                                    <input type="file"  data-toggle="tooltip" name="attachment" data-trigger="hover" class="form-control tooltips" data-original-title="附件,可不上传" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">关键词</label>

                                <div class="col-sm-6">
                                    <input type="text"  data-toggle="tooltip" name="keyword" data-trigger="hover" class="form-control tooltips" data-original-title="关键词,可为空" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">描述</label>

                                <div class="col-sm-6">
                                    <input type="text"  data-toggle="tooltip" name="description" data-trigger="hover" class="form-control tooltips" data-original-title="描述,可为空" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">简介</label>

                                <div class="col-sm-6">
                                    <input type="text"  data-toggle="tooltip" name="intro" data-trigger="hover" class="form-control tooltips" data-original-title="简介,可为空" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">置顶</label>

                                <div class="col-sm-1">
                                    <select class="form-control input-sm" name="is_top">
                                        <option value="0" >否</option>
                                        <option value="1" >是</option>
                                    </select>
                                </div>
                                <label class="col-sm-1 control-label">是否推送</label>

                                <div class="col-sm-1">
                                    <select class="form-control input-sm" name="cat_id">
                                        <option value="0" >否</option>
                                        <option value="1" >是</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">点击量</label>

                                <div class="col-sm-1">
                                    <input type="text"  data-toggle="tooltip" name="hits" data-trigger="hover" class="form-control tooltips" data-original-title="简介,可为空" value="" >
                                </div>
                                <label class="col-sm-1 control-label">排序</label>

                                <div class="col-sm-1">
                                    <input type="text"  data-toggle="tooltip" name="hits" data-trigger="hover" class="form-control tooltips" data-original-title="简介,可为空" value="" >
                                </div>
                            </div>


                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-primary">保存</button>
                                    &nbsp;
                                    <button class="btn btn-default">取消</button>
                                </div>
                            </div>
                        </div><!-- panel-footer -->

                    </form>
                </div>

            </div><!-- col-sm-9 -->

        </div><!-- row -->

    </div>
@endsection
