<?php

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
        //$this->call(Comment::class);
        //$this->call(Post::class);
        $this->call(Tag::class);
      //  $this->call(post_tag::class);
    }
}
