@extends('admin.index')
@section('title', 'Danh sách Menu')
@section('body')
<div class="page-header">
    <h1>
        List Menu
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Danh sách Menu
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
                            <th>Name</th>
                            <th>Link</th>
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
                            <td>{{$value->name}}</td>
                            <td>{{$value->link}}</td>
                            <td>{{$value->status}}</td>
                            <td>{{$value->sort_desc}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="{{route('CreateMenu')}}?id={{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="menu-detail/delete-menu/{{$value->id}}" style="color:white"></a>
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