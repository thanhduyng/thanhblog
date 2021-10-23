@extends('admin.index')
@section('title', 'Thêm mới Menu')
@section('body')
<div class="page-header">
    <h1>
        Menu detail
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thêm mới Menu
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" id="formDetail" role="form" action="{{route('InsertMenu')}}" method="post">
            @csrf
            <input type="hidden" id="txt_name" name="id" value="{{$data->id}}" class="col-xs-10 col-sm-5" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Name</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên Menu " name="name" value="{{$data->name}}" class="col-xs-10 col-sm-5" />
                    @error('name') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Link</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên link " name="link" value="{{$data->link}}" class="col-xs-10 col-sm-5" />
                    @error('link') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
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
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Sort desc </label>
                <div class="col-sm-9">
                    <input type="text" id="txt_sort_desc" class="col-xs-10 col-sm-5" id="" name="sort_desc" value="{{$data->sort_desc}}" placeholder="nhập thứ tự" />
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