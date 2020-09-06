<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete();

        $user = App\User::first(); // 追加

        // factory(App\Article::class, 20)->create();
        factory(App\Article::class, 20)->create([
            'user_id' => $user->id,
        ]);
    }
}
