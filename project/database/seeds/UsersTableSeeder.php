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
        factory(\App\User::class,10)->create()->each(function ($user){
            $book = $user->books()
                ->create(factory(\App\Book::class)->make()->toArray());
                $book->categories()->attach($this->get_random_category_id());
                $book->authors()->attach($this->get_random_author_id());
        });
    }
    private function get_random_category_id()
    {
        $random_category = \App\Category::inRandomOrder()->first();
        return !is_null($random_category) ? [$random_category->id] : [];
    }
    private function get_random_author_id()
    {
        $random_author = \App\Author::inRandomOrder()->first();
        return !is_null($random_author) ? [$random_author->id] : [];
    }
}
