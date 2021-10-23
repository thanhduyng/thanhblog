@extends('home.layout')

@section('title', 'Trang chủ')

@section('css')
<link rel="stylesheet" href="/front-end/style.css">
@stop

@section('scripts')
@stop

@section('body')    
    @include('home.layout.header')
    @include('home.slide')
    @include('home.aboutMe')
    @include('home.newAddress')
    @include('home.newPost')
    @include('home.contact')
    @include('home.layout.footer')
@endsection