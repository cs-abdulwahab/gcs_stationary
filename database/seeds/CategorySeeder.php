<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

       $data = [
            'Men Drasses' => ['Formal', 'Party Wear','Groom wear','Party wear','Bridal Dresses'],
            'Gaming Equipments' => ['Mouse', 'Controller ','Headset','Keyboard','Console'],
            'Electronics' => ['LCD', 'Cameras ','Projectors','Voice Assistant'],
            'Baby Products' => ['Stroller', 'Walker ','Sterlizers'],
            'Crockery' => ['Table wear', 'Glass wear ','Dishes','Bowls'],
            // 'image' => ['menbanner.jpg', 'gaming-01.jpg','146234698.jpg','babybanner.jpg','crokerybanner.jpg'],
        ];

        foreach ($data as $category => $subCategories)
        {
            $id = Category::create(['name' => $category])->id;

            foreach ($subCategories as $subCategory) {
                Category::create([
                    'parent_id' => $id,
                    'name' => $subCategory
                ]);
            }
        }
       
        DB::table('users')->insert([
            [

                'user-id' => 2235,
                'name' => 'azeem',
                'email' => 'hafizazeemk@gmail.com',
                'phone' => 03050440256,
                'nic' => 2325654123123,
                'address' =>'Town Ship2 ,College Road ,But Chock street No 5,House No 10',
                'password' => bcrypt(12345678),
                'usertype' => 'renter'
            ],
            [
                'user-id' => '2232',
                'name' => 'waseem',
                'email' => 'waseem@gmail.com',
                'phone' => 030556622652,
                'nic' => 2325654123123,
                'address' =>'Town Ship2 ,College Road ,But Chock street No 5,House No 10',
                'password' => bcrypt(12345678),
                'usertype' => 'renter'
            ],
            [
                'user-id' => '2234',
                'name' => 'rentee',
                'email' => 'rentee@gmail.com',
                'phone' => 22220011001,
                'nic' => 2325654123123,
                'address' =>'Town Ship2 ,College Road ,But Chock street No 5,House No 10',
                'password' => bcrypt(12345678),
                'usertype' => 'rentee'
            ],
            [
                'user-id' => '2235',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => 22220011001,
                'nic' => 2325654123123,
                'address' =>'Town Ship2 ,College Road ,But Chock street No 5,House No 10',
                'password' => bcrypt(12345678),
                'usertype' => 'admin'
            ],
        ]);
        
       
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'created_by' => '1',
                'title' => 'Samsung Galaxy S9',
                'qty' => '5',
                'product_brand' => 'good wear',
                'description' =>'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an ',
                'feature' => 'shipped good to good',
                'age_group' => '230',
                'per_day_cost' => '100',
                'per_weak_cost' => '143',
                'per_month_cost' => '1432',
                'security_cost' => '35 ',
                'rule_while_using' => 'carefully use it ',
                'term_condition' => 'be aware ggifvnn',
                'required_document' => 'CNIC Registery of games',
                'usage_policy' => 'must to go use',
                'image' => 'dd.png',
                'video' => 'deli1589.jpg',
                'product_address' => 'apple'
            ],
            [
                'category_id' => '2',
                'created_by' => '2',
                'title' => 'Samsung Galaxy S10',
                'qty' => '2',
                'product_brand' => 'good wear',
                'description' =>'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an ',
                'feature' => 'shipped good to good',
                'age_group' => '230',
                'per_day_cost' => '23',
                'per_weak_cost' => '143',
                'per_month_cost' => '1432',
                'security_cost' => '35 ',
                'rule_while_using' => 'carefully use it ',
                'term_condition' => 'be aware ggifvnn',
                'required_document' => 'CNIC Registery of games',
                'usage_policy' => 'must to go use',
                'image' => '7798-qqwx3z.jpg',
                'video' => '1530656611.jpg',
                'product_address' => 'apple'
            ],
            [
                'category_id' => '3',
                'created_by' => '2',
                'title' => 'Samsung Galaxy S111',
                'qty' => '6',
                'product_brand' => 'good wear',
                'description' =>'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an ',
                'feature' => 'shipped good to good',
                'age_group' => '230',
                'per_day_cost' => '23',
                'per_weak_cost' => '143',
                'per_month_cost' => '1432',
                'security_cost' => '35 ',
                'rule_while_using' => 'carefully use it ',
                'term_condition' => 'be aware ggifvnn',
                'required_document' => 'CNIC Registery of games',
                'usage_policy' => 'must to go use',
                'image' => '9735_g_1411351435873.jpg',
                'video' => '1530656611.jpg',
                'product_address' => 'apple'
            ]
        ]);
        // 1530656611
    }
   


}
