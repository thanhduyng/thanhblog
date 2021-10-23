<section class="section-newAddress" id="section-newAddress">
    <!-- Cirlce Starts -->
    <div class="services">
        <h2 class="text-center wowload fadeInUp new-title">Đi mô rứa?</h2>
        <!-- <ul class="row text-center list-inline  wowload bounceInUp">
            <li>
                <span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
            </li>
            <li>
                <span><i class="fa fa-cube"></i><b>Studio</b></span>
            </li>
            <li>
                <span><i class="fa fa-graduation-cap"></i><b>Trainings</b></span>
            </li>
            <li>
                <span><i class="fa fa-umbrella"></i><b>Travel</b></span>
            </li>
            <li>
                <span><i class="fa fa-heart-o"></i><b>Wedding</b></span>
            </li>
        </ul> -->
    </div>
    </div>
    <!-- #Cirlce Ends -->


    <!-- works -->
    <div id="works" class=" clearfix grid">
        @foreach($newCategory as $value)
        <figure class="effect-oscar  wowload fadeInUp">
            <img src="upload/newCategory/{{$value->image}}" alt="img01" />
            <figcaption>
                <h2>{{$value->name}}</h2>
                <p><br>
                    <a href="all-new-category/{{$value->id}}" title="">Xem thêm</a>
                </p>
            </figcaption>
        </figure>
        @endforeach
    </div><br>
    <div class="newPost-add">
        <a href="">Xem tất cả
            <i class="fa fa-arrow-circle-o-right"></i></a>
    </div>
    <!-- works -->
</section>