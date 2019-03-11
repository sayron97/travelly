<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name' => 'Product 1',
                'category_id' => '1',
                'main_img' => '1',
                'cost' => '578.50',
                'new_cost' => '539.99',
                'is_hot' => '1',
                'is_new' => '0',
                'rating' => '5',
                'product_code' => '342',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 2',
                'category_id' => '1',
                'main_img' => '2',
                'cost' => '278.00',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '1',
                'rating' => '4',
                'product_code' => '34122',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 3',
                'category_id' => '1',
                'main_img' => '3',
                'cost' => '228.50',
                'new_cost' => '149.99',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '5',
                'product_code' => '3242',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 4',
                'category_id' => '2',
                'main_img' => '4',
                'cost' => '124.50',
                'new_cost' => '',
                'is_hot' => '1',
                'is_new' => '0',
                'rating' => '2',
                'product_code' => '3432',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 5',
                'category_id' => '2',
                'main_img' => '5',
                'cost' => '489.50',
                'new_cost' => '429.99',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '3',
                'product_code' => '3442',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 6',
                'category_id' => '2',
                'main_img' => '6',
                'cost' => '578.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '4',
                'product_code' => '3452',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 7',
                'category_id' => '1',
                'main_img' => '7',
                'cost' => '78.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '1',
                'rating' => '5',
                'product_code' => '3462',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 8',
                'category_id' => '1',
                'main_img' => '8',
                'cost' => '1999.50',
                'new_cost' => '999.99',
                'is_hot' => '1',
                'is_new' => '0',
                'rating' => '4',
                'product_code' => '37942',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 9',
                'category_id' => '1',
                'main_img' => '9',
                'cost' => '578.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '1',
                'rating' => '5',
                'product_code' => '3342',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 10',
                'category_id' => '1',
                'main_img' => '10',
                'cost' => '438.50',
                'new_cost' => '420.99',
                'is_hot' => '1',
                'is_new' => '0',
                'rating' => '3',
                'product_code' => '33342',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 11',
                'category_id' => '1',
                'main_img' => '11',
                'cost' => '390.50',
                'new_cost' => '370.99',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '3',
                'product_code' => '344432',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 12',
                'category_id' => '1',
                'main_img' => '12',
                'cost' => '100.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '4',
                'product_code' => '3432',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 13',
                'category_id' => '1',
                'main_img' => '13',
                'cost' => '574.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '5',
                'product_code' => '34342',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 14',
                'category_id' => '1',
                'main_img' => '14',
                'cost' => '518.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '5',
                'product_code' => '34232',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 15',
                'category_id' => '1',
                'main_img' => '15',
                'cost' => '368.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '5',
                'product_code' => '34122',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ],
            [
                'name' => 'Product 16',
                'category_id' => '1',
                'main_img' => '16',
                'cost' => '291.50',
                'new_cost' => '',
                'is_hot' => '0',
                'is_new' => '0',
                'rating' => '4',
                'product_code' => '34672',
                'availability' => '',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type.',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the 
middle of text.
- 6.1 oz. 100% preshrunk heavyweight cotton
- Shoulder-to-shoulder taping
- Double-needle sleeves and bottom hem
',
                'info' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
                'reviews' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ',
            ]
        ]);
    }
}
