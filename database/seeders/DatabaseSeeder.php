<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Mbareb Leonardo',
        //     'email' => 'mbareb@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Tumijan',
        //     'email' => 'tum@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore. Iure repudiandae excepturi illum repellat cupiditate perferendis odio? Nam, alias facilis. Iusto doloremque eligendi ducimus! Atque tempore ullam aut ratione, cumque natus, voluptate vel vero repellendus dignissimos in aliquam excepturi amet eius, magnam placeat debitis dolore maiores modi! Maiores nobis eos non commodi odio, enim dolor placeat quasi provident minus nulla vero perferendis quam. Asperiores magnam optio deleniti saepe debitis quo tempore minima incidunt reprehenderit ad laudantium repellendus nam, vero modi corrupti eum aliquid quibusdam dicta esse libero! Quo, deserunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore. Iure repudiandae excepturi illum repellat cupiditate perferendis odio? Nam, alias facilis. Iusto doloremque eligendi ducimus! Atque tempore ullam aut ratione, cumque natus, voluptate vel vero repellendus dignissimos in aliquam excepturi amet eius, magnam placeat debitis dolore maiores modi! Maiores nobis eos non commodi odio, enim dolor placeat quasi provident minus nulla vero perferendis quam. Asperiores magnam optio deleniti saepe debitis quo tempore minima incidunt reprehenderit ad laudantium repellendus nam, vero modi corrupti eum aliquid quibusdam dicta esse libero! Quo, deserunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore. Iure repudiandae excepturi illum repellat cupiditate perferendis odio? Nam, alias facilis. Iusto doloremque eligendi ducimus! Atque tempore ullam aut ratione, cumque natus, voluptate vel vero repellendus dignissimos in aliquam excepturi amet eius, magnam placeat debitis dolore maiores modi! Maiores nobis eos non commodi odio, enim dolor placeat quasi provident minus nulla vero perferendis quam. Asperiores magnam optio deleniti saepe debitis quo tempore minima incidunt reprehenderit ad laudantium repellendus nam, vero modi corrupti eum aliquid quibusdam dicta esse libero! Quo, deserunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, laudantium fuga quibusdam enim facere optio animi sit quisquam sequi tempore. Iure repudiandae excepturi illum repellat cupiditate perferendis odio? Nam, alias facilis. Iusto doloremque eligendi ducimus! Atque tempore ullam aut ratione, cumque natus, voluptate vel vero repellendus dignissimos in aliquam excepturi amet eius, magnam placeat debitis dolore maiores modi! Maiores nobis eos non commodi odio, enim dolor placeat quasi provident minus nulla vero perferendis quam. Asperiores magnam optio deleniti saepe debitis quo tempore minima incidunt reprehenderit ad laudantium repellendus nam, vero modi corrupti eum aliquid quibusdam dicta esse libero! Quo, deserunt.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}