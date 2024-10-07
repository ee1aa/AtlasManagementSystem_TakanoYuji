<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['over_name' => 'Atlas',
            'under_name' => '一郎',
            'over_name_kana' => 'アトラス',
            'under_name_kana' => 'イチロウ',
            'mail_address' => 'atlas1@gmail.com',
            'sex' => '男',
            'birth_day' => '1986-08-01',
            'role' => '',
            'password' => 'password1',],
        ]);
    }
}
