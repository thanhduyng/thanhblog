<section class="section-aboutMe" id="section-aboutMe">
    <div id="about" class="container spacer about">
        <h2 class="text-center wowload fadeInUp">Đôi nét về <span>Bầu Trời Xanh</span></h2>
        <div class="row">
            <div class="col-sm-7 wowload fadeInLeft">
                <h4><i class="fa fa-camera-retro"></i> {{$aboutMe[0]->title}} </h4>
                <!-- <p>Mình tạo ra Blog "Bầu Trời Xanh" này với hy vọng chia sẻ những bức ảnh, câu chuyện, tip nhỏ.v.v. Đây như là một cuốn sổ nhật ký 
                ghi lại hành trình trưởng thành của bản thân.<br>
                Được ghi lại những kỷ niệm qua những bức ảnh, đó là điều mình rất thích từ khi còn nhỏ. Nó giúp mình có thêm niềm vui, động lực
                và theo thời gian thì mình cảm thấy mỗi bức hình mình chụp nó đều mang những ý nghĩa và giá trị riêng.<br>
                Và một điều nữa, mình muốn bản thân cũng như mọi người: <span style="font-style: italic;">"Hãy để mắt đến những vì sao và đôi chân của bạn trên mặt đất"</span>. 
                Miễn là bạn đã có mục tiêu của mình, thì hãy cứ bước đi trên con đường đó, mọi sự cố gắng đều có kết quả thôi.</p> -->
               {!!$aboutMe[0]->description !!}
            </div>
            <div class="col-sm-5 wowload fadeInRight">
                <h4><i class=""></i></h4>
                <img src="upload/abouts/{{$aboutMe[0]->image}}">
            </div>
        </div>
</section>