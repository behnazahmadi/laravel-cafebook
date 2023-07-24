<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
            'picture'=>"https://fa.wikipedia.org/wiki/%D8%AF%D9%86%DB%8C%D8%A7%DB%8C_%D8%B3%D9%88%D9%81%DB%8C#/media/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:Donyaye_Sufi_Book.Jpg",
            'user_id'=>"1",
            'title' =>"title of book",
            'text'=>"The Last Years of the Roman Republic"
            ],
            [
            'picture'=>"https://fa.wikipedia.org/wiki/%D8%AF%D9%86%DB%8C%D8%A7%DB%8C_%D8%B3%D9%88%D9%81%DB%8C#/media/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:Donyaye_Sufi_Book.Jpg",
            'user_id'=>"1",
            'title' =>"title of book",
            'text'=>"Rubicon: The Last Years of the Roman Republic, or Rubicon: The Triumph and Tragedy of the Roman Republic, is a popular history book written by Tom Holland, published in 2003."
            ],
            [
            'picture'=>"https://fa.wikipedia.org/wiki/%D8%AF%D9%86%DB%8C%D8%A7%DB%8C_%D8%B3%D9%88%D9%81%DB%8C#/media/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:Donyaye_Sufi_Book.Jpg",
            'user_id'=>"2",
            'title' =>"title of book",
            'text'=>"All ages of the world have not produced a greater statesman and philosopher combined.--John Adams He squared off against Caesar and was friends with young Brutus."
            ],
            [
            'picture'=>"https://fa.wikipedia.org/wiki/%D8%AF%D9%86%DB%8C%D8%A7%DB%8C_%D8%B3%D9%88%D9%81%DB%8C#/media/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:Donyaye_Sufi_Book.Jpg",
            'user_id'=>"2",
            'title' =>"title of book",
            'text'=>"no description"
            ],
            [
            'picture'=>"https://fa.wikipedia.org/wiki/%D8%AF%D9%86%DB%8C%D8%A7%DB%8C_%D8%B3%D9%88%D9%81%DB%8C#/media/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:Donyaye_Sufi_Book.Jpg",
            'user_id'=>"2",
            'title' =>"title of book",
            'text'=>"no description"
            ]
            ]);
    }
}
