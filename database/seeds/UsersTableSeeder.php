<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        factory(App\Book::class, 50)->create();
        factory(App\Category::class, 10)->create();
        factory(App\Type::class, 6)->create();
        factory(App\Status::class, 3)->create();
    }
}
