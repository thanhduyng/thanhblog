<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        DB::table('slides')->insert(
            [
                'id' => 1,
                'name' => "Slide 1",
                'image' => "1634907918.jpg",
                'status' => 1,
                'sort_desc' => 1,
            ]
        );

        DB::table('slides')->insert(
            [
                'id' => 2,
                'name' => "Slide 2",
                'image' => "1634907868.jpg",
                'status' => 1,
                'sort_desc' => 2,
            ]
        );

        DB::table('slides')->insert(
            [
                'id' => 3,
                'name' => "Slide 3",
                'image' => "1634907936.jpg",
                'status' => 1,
                'sort_desc' => 3,
            ]
        );

        DB::table('abouts')->insert(
            [
                'title' => 'Giới thiệu',
                'image' => '1634908033.jpg',
                'description' => "<p>Mình tạo ra Blog 'Bầu Trời Xanh' này với hy vọng chia sẻ những bức ảnh, câu chuyện, tip nhỏ.v.v. Đây như là một cuốn sổ nhật ký ghi lại hành trình trưởng thành của bản thân.<br>
                 Được ghi lại những kỷ niệm qua những bức ảnh, đó là điều mình rất thích từ khi còn nhỏ. Nó giúp mình có thêm niềm vui, động lực và theo thời gian thì mình cảm thấy mỗi bức hình mình chụp nó đều mang những ý nghĩa và giá trị riêng.<br>
                 Và một điều nữa, mình muốn bản thân cũng như mọi người: <span style='font-style: italic;'>'Hãy để mắt đến những vì sao và đôi chân của bạn trên mặt đất'</span>. Miễn là bạn đã có mục tiêu của mình, thì hãy cứ bước đi trên con đường đó, mọi sự cố gắng đều có kết quả thôi.</p>",
                'facebook_link' => 'https://www.facebook.com/bluesky2o02',
                'instagram_link' => 'https://www.instagram.com/thanh.duy.ng/',
                'skype_link' => '#',
                ]
        );

        DB::table('new_categorys')->insert(
            [
                'name' => "HUẾ",
                'image' => "1634908861.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "ĐÀ NẴNG",
                'image' => "1634909782.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "HẢI VÂN QUAN",
                'image' => "1634908785.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "NHẬP NGŨ",
                'image' => "1634909221.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "INTERNSHIP 2021",
                'image' => "1634908885.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "VỀ TÔI",
                'image' => "1634909827.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "NHỮNG NGÀY MƯA",
                'image' => "1634982979.jpg",
                'status' => 1,
            ]
        );
        DB::table('new_categorys')->insert(
            [
                'name' => "COFFEE",
                'image' => "1634909753.jpg",
                'status' => 1,
            ]
        );

        DB::table('news')->insert(
            [
                'id_category_new' => 2,
                'name' => "Bình minh Đà Nẵng",
                'background_image' => "1634913060.jpg",
                'description' => 1,
                'address' => "Mân Thái-ĐN",
                'go_date' => "2021-10-21",
            ],

        );
        DB::table('news')->insert(
            [
                'id_category_new' => 2,
                'name' => "View mới ở Đà Nẵng",
                'background_image' => "1634913243.jpg",
                'address' => "HUẾ",
                'go_date' => "2021-10-21",
            ],

        );
        DB::table('news')->insert(
            [
                'id_category_new' => 1,
                'name' => "Chuyến đi chơi Cầu Vòm Đồn Cả",
                'background_image' => "1634913468.jpg",
                'address' => "MỸ KHÊ-ĐN",
                'go_date' => "2021-10-21",
            ],

        );

        DB::table('image_news')->insert(
            [
                'name_image' => "KOEG_IMG_8408.jpg",
                'id_new' => 1,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "OhMl_IMG_8433.jpg",
                'id_new' => 1,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "Rsn7_IMG_8432.jpg",
                'id_new' => 1,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "Ax4j_IMG_0385 (1).jpg",
                'id_new' => 2,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "Gedn_PicsArt_06-19-11.28.21.jpg",
                'id_new' => 2,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "K8TF_IMG_1724.jpg",
                'id_new' => 3,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "u76a_IMG_1666.jpg",
                'id_new' => 3,
            ],
        );
        DB::table('image_news')->insert(
            [
                'name_image' => "hlBT_IMG_0354.jpg",
                'id_new' => 2,
            ],
        );
    }
}
