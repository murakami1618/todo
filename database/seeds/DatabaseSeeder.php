<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tasks")->truncate();
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into tasks (name,g) values ('愛すべきもの全てに高井田','200')");
        DB::insert("insert into tasks (name,g) values ('どかもりマッチョ','200')");
        DB::insert("insert into tasks (name,g) values ('麺屋ガテン','200')");
        DB::insert("insert into tasks (name,g) values ('歴史を刻め','200')");
        DB::insert("insert into tasks (name,g) values ('男塾','200')");
        DB::insert("insert into tasks (name,g) values ('好きだから','200')");
        DB::insert("insert into tasks (name,g) values ('のスタ','200')");
    }
}
