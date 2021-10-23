<section class="section-slide" id="section-slide">
  <div id="home">
    <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($slide as $value)
        @if($value->sort_desc == 1)
        <div class="item active">
          @else
          <div class="item">
            @endif
            <img src="/upload/slides/{{$value->image}}" alt="banner">
          </div>
          @endforeach
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
      </div>
    </div>
</section>