@extends('admin.index')
@section('title', 'Thêm mới New')

@section('scripts')
<script src="/demo.js"></script>
@stop

@section('body')
<div class="page-header">
    <h1>
        New detail
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thêm mới New
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" id="formDetail" role="form" action="{{route('InsertNew')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="txt_name" placeholder="name" name="id" value="{{$data->id}}" class="col-xs-10 col-sm-5" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Name</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên New " name="name" value="{{$data->name}}" class="col-xs-10 col-sm-5" />
                    @error('name') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Image </label>
                <div class="col-sm-9">
                    @if(isset($data->background_image))
                    <img src="/upload/newbg/{{ $data->background_image }}" height="150px">
                    @endif
                    <img id="image" style="width: 250px;height: 150px;" />
                    <input type="file" name="background_image" id="files" class="custom-file-input" value="{{$data->background_image}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Name Category</label>
                <div class="col-sm-9">
                    <select name="id_category_new" id="id_category_new" required class="col-xs-10 col-sm-5">
                        @foreach($newCategory as $nd => $value)
                        <option value="{{$nd}}" {{($nd == $data->id_category_new) ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group" id="divImage">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Hình ảnh</label>
                <div class="col-sm-9">
                    <input type="file" id="filImage[]" name="filImage[]" required="" class="col-xs-10 col-sm-5">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                    <button type="button" class="btn btn-default" id="btnAddImage">Thêm ảnh</button>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> description</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên description " name="description" value="{{$data->description}}" class="col-xs-10 col-sm-5" />
                    @error('description') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> address</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên New " name="address" value="{{$data->address}}" class="col-xs-10 col-sm-5" />
                    @error('address') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> go_date</label>
                <div class="col-sm-9">
                    <input type="date" id="txt_name" name="go_date" value="{{$data->go_date}}" class="col-xs-10 col-sm-5" />
                    @error('go_date') <div class="col-xs-10 col-sm-12 alert-danger">{{ $message }}</div> @enderror
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
                            <input type="radio" name="status" id="status2" value="0" @if ($data->status == 0)
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
<script>
    document.getElementById("files").onchange = function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>
@stop