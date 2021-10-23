@extends('admin.index')
@section('title', 'Danh sách Slide')
@section('body')
<div class="page-header">
    <h1>
        List Slide
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Danh sách slide
        </small>
    </h1>
</div>
@if (session('message'))
<div class="alert alert-success">
    {{Session('message')}}
</div>
@endif
<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Sort desc</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $value)
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td>
                                <img style="width: 80px; height: 80px;" src="{{asset("upload/slides/".$value->image)}}"></img>
                            </td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->status}}</td>
                            <td>{{$value->sort_desc}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="{{route('CreateSlide')}}?id={{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="slide-detail/delete-slide/{{$value->id}}"  
                                        onclick="return confirm('Bạn có chắc không?')" style="color:white"></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop