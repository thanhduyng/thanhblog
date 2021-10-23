@extends('admin.index')
@section('title', 'Thêm mới About')
@section('body')
<div class="page-header">
    <h1>
        About detail
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thêm mới About
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" id="formDetail" role="form" action="{{route('InsertAbout')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="txt_name" placeholder="name" name="id" value="{{$data->id}}" class="col-xs-10 col-sm-5" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Tiêu đề</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tiêu đề " name="title" value="{{$data->title}}" class="col-xs-10 col-sm-5" />
                    @error('title') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Ảnh </label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="custom-file-input" value="{{$data->image}}">
                    @error('image') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Nội dung </label>
                <div class="col-sm-9">
                    <input type="text" id="description" class="col-xs-10 col-sm-5" id="" name="description" value="{{$data->description}}" placeholder="nhập nội dung" />
                    @error('description') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-tags"></label>
                <div class="col-sm-9">
                    <button class="btn btn-info BTN_Save" id="BTN_Save" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                    </button>
                </div>
            </div>

        </form>
        <h3 class="text-success" id="result"></h3>
    </div>
</div>
@stop