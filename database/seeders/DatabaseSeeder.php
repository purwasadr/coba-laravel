<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Purwa Sadr',
        //     'email' => 'purwa@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::create([
            'name' => 'Arturia Pendragon',
            'username' => 'arturia_pendragon',
            'email' => 'arturiapendragon@gmail.com',
            'password' => bcrypt('password')
        ]);

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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos, at quis optio voluptate temporibus accusamus numquam ex iure, vitae ad ipsum. </p> <p>Suscipit explicabo autem ipsam eius sit sunt repudiandae perferendis, fugiat quo obcaecati! Fugit maiores incidunt quidem numquam accusantium quo voluptatum assumenda aut perspiciatis tenetur blanditiis dolores fuga cumque saepe consequuntur recusandae labore possimus beatae, odit accusamus delectus corrupti, magnam natus explicabo? Quae enim fuga voluptas id omnis quibusdam, atque ipsum ipsa eos. </p><p> Eius odio et assumenda veniam eveniet necessitatibus. Aspernatur maxime molestias quas praesentium, iusto ipsam magnam maiores temporibus adipisci tempore accusantium fugiat ad corrupti animi unde quisquam cumque laboriosam culpa! Unde ratione harum eaque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos, at quis optio voluptate temporibus accusamus numquam ex iure, vitae ad ipsum. </p> <p>Suscipit explicabo autem ipsam eius sit sunt repudiandae perferendis, fugiat quo obcaecati! Fugit maiores incidunt quidem numquam accusantium quo voluptatum assumenda aut perspiciatis tenetur blanditiis dolores fuga cumque saepe consequuntur recusandae labore possimus beatae, odit accusamus delectus corrupti, magnam natus explicabo? Quae enim fuga voluptas id omnis quibusdam, atque ipsum ipsa eos. </p><p> Eius odio et assumenda veniam eveniet necessitatibus. Aspernatur maxime molestias quas praesentium, iusto ipsam magnam maiores temporibus adipisci tempore accusantium fugiat ad corrupti animi unde quisquam cumque laboriosam culpa! Unde ratione harum eaque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos, at quis optio voluptate temporibus accusamus numquam ex iure, vitae ad ipsum. </p> <p>Suscipit explicabo autem ipsam eius sit sunt repudiandae perferendis, fugiat quo obcaecati! Fugit maiores incidunt quidem numquam accusantium quo voluptatum assumenda aut perspiciatis tenetur blanditiis dolores fuga cumque saepe consequuntur recusandae labore possimus beatae, odit accusamus delectus corrupti, magnam natus explicabo? Quae enim fuga voluptas id omnis quibusdam, atque ipsum ipsa eos. </p><p> Eius odio et assumenda veniam eveniet necessitatibus. Aspernatur maxime molestias quas praesentium, iusto ipsam magnam maiores temporibus adipisci tempore accusantium fugiat ad corrupti animi unde quisquam cumque laboriosam culpa! Unde ratione harum eaque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta quis cumque dignissimos optio nam earum hic obcaecati assumenda consequatur? Nemo maiores dignissimos, at quis optio voluptate temporibus accusamus numquam ex iure, vitae ad ipsum. </p> <p>Suscipit explicabo autem ipsam eius sit sunt repudiandae perferendis, fugiat quo obcaecati! Fugit maiores incidunt quidem numquam accusantium quo voluptatum assumenda aut perspiciatis tenetur blanditiis dolores fuga cumque saepe consequuntur recusandae labore possimus beatae, odit accusamus delectus corrupti, magnam natus explicabo? Quae enim fuga voluptas id omnis quibusdam, atque ipsum ipsa eos. </p><p> Eius odio et assumenda veniam eveniet necessitatibus. Aspernatur maxime molestias quas praesentium, iusto ipsam magnam maiores temporibus adipisci tempore accusantium fugiat ad corrupti animi unde quisquam cumque laboriosam culpa! Unde ratione harum eaque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
