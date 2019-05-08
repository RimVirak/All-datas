<?php

use Illuminate\Database\Seeder;

class CommentTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\comment::class,10)->create();
    }
}
