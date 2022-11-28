<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Johni Revormasi Ziliwu',
            'username' => 'johnirevormasi',
            'email' => 'jrevormasi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'David Kristian Ziliwu',
        //     'email' => 'dkristian@gmail.com',
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
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Post::factory(21)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus. Consequatur, eius animi. Eius temporibus itaque expedita vel quam provident, repudiandae voluptatum? Nesciunt numquam facilis obcaecati, odit dolorem in facere quas ducimus neque quasi commodi molestiae adipisci harum maxime error, iusto quibusdam molestias quo accusantium et excepturi voluptate vitae perspiciatis. Vel quasi vitae eum cum sint culpa explicabo. Similique vero sit provident autem libero! Ducimus pariatur qui iure ex laboriosam omnis possimus officia ea tempore quo voluptatum voluptates at maxime, facilis eaque! Nam vel deserunt accusamus iure perspiciatis minima aperiam, atque tempora dolore, officiis eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus. Consequatur, eius animi. Eius temporibus itaque expedita vel quam provident, repudiandae voluptatum? Nesciunt numquam facilis obcaecati, odit dolorem in facere quas ducimus neque quasi commodi molestiae adipisci harum maxime error, iusto quibusdam molestias quo accusantium et excepturi voluptate vitae perspiciatis. Vel quasi vitae eum cum sint culpa explicabo. Similique vero sit provident autem libero! Ducimus pariatur qui iure ex laboriosam omnis possimus officia ea tempore quo voluptatum voluptates at maxime, facilis eaque! Nam vel deserunt accusamus iure perspiciatis minima aperiam, atque tempora dolore, officiis eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus. Consequatur, eius animi. Eius temporibus itaque expedita vel quam provident, repudiandae voluptatum? Nesciunt numquam facilis obcaecati, odit dolorem in facere quas ducimus neque quasi commodi molestiae adipisci harum maxime error, iusto quibusdam molestias quo accusantium et excepturi voluptate vitae perspiciatis. Vel quasi vitae eum cum sint culpa explicabo. Similique vero sit provident autem libero! Ducimus pariatur qui iure ex laboriosam omnis possimus officia ea tempore quo voluptatum voluptates at maxime, facilis eaque! Nam vel deserunt accusamus iure perspiciatis minima aperiam, atque tempora dolore, officiis eligendi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi voluptatibus est similique nesciunt eius possimus. Consequatur, eius animi. Eius temporibus itaque expedita vel quam provident, repudiandae voluptatum? Nesciunt numquam facilis obcaecati, odit dolorem in facere quas ducimus neque quasi commodi molestiae adipisci harum maxime error, iusto quibusdam molestias quo accusantium et excepturi voluptate vitae perspiciatis. Vel quasi vitae eum cum sint culpa explicabo. Similique vero sit provident autem libero! Ducimus pariatur qui iure ex laboriosam omnis possimus officia ea tempore quo voluptatum voluptates at maxime, facilis eaque! Nam vel deserunt accusamus iure perspiciatis minima aperiam, atque tempora dolore, officiis eligendi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}