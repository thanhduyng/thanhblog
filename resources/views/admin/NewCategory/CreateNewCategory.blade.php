@extends('admin.index')
@section('title', 'Thêm mới NewCategory')
@section('body')
<div class="page-header">
    <h1>
        NewCategory detail
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thêm mới NewCategory
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" id="formDetail" role="form" action="{{route('InsertNewCategory')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="txt_name" placeholder="name" name="id" value="{{$data->id}}" class="col-xs-10 col-sm-5" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Name</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên NewCategory " name="name" value="{{$data->name}}" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Image </label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="custom-file-input" value="{{$data->image}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Status </label>
                <div class="col-sm-9">
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" id="status1" value="1" @if ($data->status == 1)
                            {{ 'checked' }}
                            @endif>Hoạt động
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="status" id="status2" value="0"  @if ($data->status == 0)
                            {{ 'checked' }}
                            @endif> Không hoạt động
                        </label>
                    </div>
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