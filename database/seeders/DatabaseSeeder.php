<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fairuz Ulum',
            'username' => 'fairuzulum',
            'email' => 'afairuzu@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Jauja Iklimah',
        //     'email' => 'jaujaiqlimah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis. Quos eos accusamus repudiandae nesciunt, adipisci quae possimus expedita alias illum labore dolores ex facere perferendis magnam eaque unde nemo dicta dignissimos quis explicabo ea, nam corporis. Tempora quos laboriosam, repellendus quaerat earum pariatur accusamus ratione. Quas ullam mollitia optio rerum obcaecati tenetur necessitatibus eos pariatur nam perferendis fugiat, eveniet laboriosam vel possimus magnam ratione iure commodi accusamus placeat ex repellendus, fugit eaque libero dolorum. Sit aut esse nulla tenetur eaque quo aliquid molestiae maiores soluta quod ipsa repudiandae veniam nisi, assumenda consequatur eligendi eius aperiam? Voluptatem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis. Quos eos accusamus repudiandae nesciunt, adipisci quae possimus expedita alias illum labore dolores ex facere perferendis magnam eaque unde nemo dicta dignissimos quis explicabo ea, nam corporis. Tempora quos laboriosam, repellendus quaerat earum pariatur accusamus ratione. Quas ullam mollitia optio rerum obcaecati tenetur necessitatibus eos pariatur nam perferendis fugiat, eveniet laboriosam vel possimus magnam ratione iure commodi accusamus placeat ex repellendus, fugit eaque libero dolorum. Sit aut esse nulla tenetur eaque quo aliquid molestiae maiores soluta quod ipsa repudiandae veniam nisi, assumenda consequatur eligendi eius aperiam? Voluptatem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis. Quos eos accusamus repudiandae nesciunt, adipisci quae possimus expedita alias illum labore dolores ex facere perferendis magnam eaque unde nemo dicta dignissimos quis explicabo ea, nam corporis. Tempora quos laboriosam, repellendus quaerat earum pariatur accusamus ratione. Quas ullam mollitia optio rerum obcaecati tenetur necessitatibus eos pariatur nam perferendis fugiat, eveniet laboriosam vel possimus magnam ratione iure commodi accusamus placeat ex repellendus, fugit eaque libero dolorum. Sit aut esse nulla tenetur eaque quo aliquid molestiae maiores soluta quod ipsa repudiandae veniam nisi, assumenda consequatur eligendi eius aperiam? Voluptatem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus libero tempore perspiciatis. Quos eos accusamus repudiandae nesciunt, adipisci quae possimus expedita alias illum labore dolores ex facere perferendis magnam eaque unde nemo dicta dignissimos quis explicabo ea, nam corporis. Tempora quos laboriosam, repellendus quaerat earum pariatur accusamus ratione. Quas ullam mollitia optio rerum obcaecati tenetur necessitatibus eos pariatur nam perferendis fugiat, eveniet laboriosam vel possimus magnam ratione iure commodi accusamus placeat ex repellendus, fugit eaque libero dolorum. Sit aut esse nulla tenetur eaque quo aliquid molestiae maiores soluta quod ipsa repudiandae veniam nisi, assumenda consequatur eligendi eius aperiam? Voluptatem.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
