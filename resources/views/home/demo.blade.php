@extends('home.layout')

@section('title', 'Trang chủ')

@section('css')
<link rel="stylesheet" href="/front-end/style.css">
<link rel="stylesheet" href="/demo.css">
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/theme.css">
@stop

@section('scripts')
@stop

@section('body')
@include('home.layout.header')
<section class="section-image" id="">
    <div id="home">
        <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/bg5.png" alt="banner">
                    <h2 class="title-h2">Tất cả bài viết của Bầu Trời Xanh</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-4 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="card-columns">

                @foreach($allNewPost as $value)
                <div class="card card-pin">
                    <img class="card-img" src="upload/newbg/{{$value->background_image}}" alt="Card image">
                    <div class="overlay">
                        <h2 class="card-title title">{{$value->name}}</h2>
                        <div class="more">
                            <a href="upload/newbg/{{$value->background_image}}" title="{{$value->name}}" data-gallery>
                                <i class="fa fa-arrow-circle-o-right"></i>Phóng to</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@include('home.layout.footer')
@endsection