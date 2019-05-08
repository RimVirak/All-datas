<?php

use Illuminate\Database\Seeder;

class post_tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(post_tag::Class,5)->create();
    }
}
