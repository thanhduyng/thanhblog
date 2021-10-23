<section class="section-newPost" id="section-newPost">
    <div id="partners" class="container spacer ">
        <h2 class="text-center  wowload fadeInUp">Những bài viết mới nhất của <span>Bầu Trời Xanh</span></h2>

        <div class="row">
            @foreach($new as $value)
            <div class="col-md-4 ">
                <img src="upload/newbg/{{$value->background_image}}" alt="img01" />

                <div class="col-sm-12 newPost-title">
                    <a class="title-begin" href="#">{{$value->name}}</a>
                </div>
                <a class="title-end">{{$value->address}}</a>
                <a class="title-end">{{$value->go_date}}</a>
            </div>
            @endforeach
        </div>
        <div class="newPost-add">
            <a href="{{route('allPostNew')}}">Xem tất cả
                <i class="fa fa-arrow-circle-o-right"></i></a>
        </div>
    </div>
</section>