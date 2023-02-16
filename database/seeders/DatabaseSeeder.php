<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // // \App\Models\User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Internet Of Things',
            'slug' => 'internet-of-things'
        ]);


        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Laravel Authentication',
        //     'slug' => 'laravel-authentication',
        //     'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor
        //     tempore earum, culpa debitis exercitationem fugit magni provident fuga repellendus consectetur eius. Adipisci totam
        //     tempore ipsam sapiente eos iure aut sint magnam incidunt omnis! Expedita voluptatem labore eveniet id, quam
        //     voluptatum reprehenderit magni harum laborum et facere corrupti enim alias voluptatibus quos!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat tempore deleniti error laboriosam soluta
        //     omnis doloribus minus voluptas ratione facere ea quis perspiciatis vero rem, alias, esse nam qui delectus voluptatum
        //     quam? Dolore, nostrum quos? Quibusdam explicabo nemo doloribus iusto inventore magnam obcaecati hic, consequuntur a
        //     neque doloremque. Aliquam praesentium rerum molestiae fugit esse repellat dolor dignissimos beatae ullam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Backend Flutter',
        //     'slug' => 'backend-flutter',
        //     'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor
        //     tempore earum, culpa debitis exercitationem fugit magni provident fuga repellendus consectetur eius. Adipisci totam
        //     tempore ipsam sapiente eos iure aut sint magnam incidunt omnis! Expedita voluptatem labore eveniet id, quam
        //     voluptatum reprehenderit magni harum laborum et facere corrupti enim alias voluptatibus quos!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat tempore deleniti error laboriosam soluta
        //     omnis doloribus minus voluptas ratione facere ea quis perspiciatis vero rem, alias, esse nam qui delectus voluptatum
        //     quam? Dolore, nostrum quos? Quibusdam explicabo nemo doloribus iusto inventore magnam obcaecati hic, consequuntur a
        //     neque doloremque. Aliquam praesentium rerum molestiae fugit esse repellat dolor dignissimos beatae ullam.</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Laravel Inertia',
        //     'slug' => 'laravel-inertia',
        //     'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor
        //     tempore earum, culpa debitis exercitationem fugit magni provident fuga repellendus consectetur eius. Adipisci totam
        //     tempore ipsam sapiente eos iure aut sint magnam incidunt omnis! Expedita voluptatem labore eveniet id, quam
        //     voluptatum reprehenderit magni harum laborum et facere corrupti enim alias voluptatibus quos!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat tempore deleniti error laboriosam soluta
        //     omnis doloribus minus voluptas ratione facere ea quis perspiciatis vero rem, alias, esse nam qui delectus voluptatum
        //     quam? Dolore, nostrum quos? Quibusdam explicabo nemo doloribus iusto inventore magnam obcaecati hic, consequuntur a
        //     neque doloremque. Aliquam praesentium rerum molestiae fugit esse repellat dolor dignissimos beatae ullam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Arduino Dasar',
        //     'slug' => 'arduino-dasar',
        //     'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor
        //     tempore earum, culpa debitis exercitationem fugit magni provident fuga repellendus consectetur eius. Adipisci totam
        //     tempore ipsam sapiente eos iure aut sint magnam incidunt omnis! Expedita voluptatem labore eveniet id, quam
        //     voluptatum reprehenderit magni harum laborum et facere corrupti enim alias voluptatibus quos!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat tempore deleniti error laboriosam soluta
        //     omnis doloribus minus voluptas ratione facere ea quis perspiciatis vero rem, alias, esse nam qui delectus voluptatum
        //     quam? Dolore, nostrum quos? Quibusdam explicabo nemo doloribus iusto inventore magnam obcaecati hic, consequuntur a
        //     neque doloremque. Aliquam praesentium rerum molestiae fugit esse repellat dolor dignissimos beatae ullam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Hooks React Js',
        //     'slug' => 'hooks-react-js',
        //     'excerp' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab quia quas odit natus qui cupiditate, totam dolor
        //     tempore earum, culpa debitis exercitationem fugit magni provident fuga repellendus consectetur eius. Adipisci totam
        //     tempore ipsam sapiente eos iure aut sint magnam incidunt omnis! Expedita voluptatem labore eveniet id, quam
        //     voluptatum reprehenderit magni harum laborum et facere corrupti enim alias voluptatibus quos!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repellat tempore deleniti error laboriosam soluta
        //     omnis doloribus minus voluptas ratione facere ea quis perspiciatis vero rem, alias, esse nam qui delectus voluptatum
        //     quam? Dolore, nostrum quos? Quibusdam explicabo nemo doloribus iusto inventore magnam obcaecati hic, consequuntur a
        //     neque doloremque. Aliquam praesentium rerum molestiae fugit esse repellat dolor dignissimos beatae ullam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);
    }
}
