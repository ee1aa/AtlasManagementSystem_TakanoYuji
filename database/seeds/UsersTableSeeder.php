<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            [
                'over_name' => '山田',
                'under_name' => '太郎',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'タロウ',
                'mail_address' => 'yamada@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1990-01-01',
                'role' => 1, // 教師（国語）
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '鈴木',
                'under_name' => '花子',
                'over_name_kana' => 'スズキ',
                'under_name_kana' => 'ハナコ',
                'mail_address' => 'suzuki@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1991-02-02',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password456'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '佐藤',
                'under_name' => '次郎',
                'over_name_kana' => 'サトウ',
                'under_name_kana' => 'ジロウ',
                'mail_address' => 'sato@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1992-03-03',
                'role' => 3, // 教師（英語）
                'password' => Hash::make('password789'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '高橋',
                'under_name' => '一郎',
                'over_name_kana' => 'タカハシ',
                'under_name_kana' => 'イチロウ',
                'mail_address' => 'takahashi@example.com',
                'sex' => 3, // その他
                'birth_day' => '1993-04-04',
                'role' => 4, // 生徒
                'password' => Hash::make('password321'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '田中',
                'under_name' => '五郎',
                'over_name_kana' => 'タナカ',
                'under_name_kana' => 'ゴロウ',
                'mail_address' => 'tanaka@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1994-05-05',
                'role' => 1, // 教師（国語）
                'password' => Hash::make('password654'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '斉藤',
                'under_name' => '美咲',
                'over_name_kana' => 'サイトウ',
                'under_name_kana' => 'ミサキ',
                'mail_address' => 'saito@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1995-06-06',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password987'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '渡辺',
                'under_name' => '龍太',
                'over_name_kana' => 'ワタナベ',
                'under_name_kana' => 'リュウタ',
                'mail_address' => 'watanabe@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1996-07-07',
                'role' => 3, // 教師（英語）
                'password' => Hash::make('password246'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '伊藤',
                'under_name' => '夏子',
                'over_name_kana' => 'イトウ',
                'under_name_kana' => 'ナツコ',
                'mail_address' => 'natsuko@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1997-08-08',
                'role' => 4, // 生徒
                'password' => Hash::make('password369'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '小林',
                'under_name' => '翔',
                'over_name_kana' => 'コバヤシ',
                'under_name_kana' => 'ショウ',
                'mail_address' => 'kobayashi@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1998-09-09',
                'role' => 1, // 教師（国語）
                'password' => Hash::make('password159'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '中村',
                'under_name' => '茜',
                'over_name_kana' => 'ナカムラ',
                'under_name_kana' => 'アカネ',
                'mail_address' => 'nakamura@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1999-10-10',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password753'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '林',
                'under_name' => '健太',
                'over_name_kana' => 'ハヤシ',
                'under_name_kana' => 'ケンタ',
                'mail_address' => 'hayashi@example.com',
                'sex' => 3, // その他
                'birth_day' => '2000-11-11',
                'role' => 4, // 生徒
                'password' => Hash::make('password951'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '清水',
                'under_name' => '愛',
                'over_name_kana' => 'シミズ',
                'under_name_kana' => 'アイ',
                'mail_address' => 'shimizu@example.com',
                'sex' => 2, // 女性
                'birth_day' => '2001-12-12',
                'role' => 4, // 生徒
                'password' => Hash::make('password852'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '森',
                'under_name' => '光太',
                'over_name_kana' => 'モリ',
                'under_name_kana' => 'コウタ',
                'mail_address' => 'mori@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1985-01-13',
                'role' => 3, // 教師（英語）
                'password' => Hash::make('password741'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '青木',
                'under_name' => '静香',
                'over_name_kana' => 'アオキ',
                'under_name_kana' => 'シズカ',
                'mail_address' => 'aoki@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1989-02-14',
                'role' => 4, // 生徒
                'password' => Hash::make('password963'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '松本',
                'under_name' => '優',
                'over_name_kana' => 'マツモト',
                'under_name_kana' => 'ユウ',
                'mail_address' => 'matsumoto@example.com',
                'sex' => 3, // その他
                'birth_day' => '1990-03-15',
                'role' => 1, // 教師（国語）
                'password' => Hash::make('password456'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '石井',
                'under_name' => '進',
                'over_name_kana' => 'イシイ',
                'under_name_kana' => 'ススム',
                'mail_address' => 'ishii@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1991-04-16',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password147'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '木村',
                'under_name' => '遥',
                'over_name_kana' => 'キムラ',
                'under_name_kana' => 'ハルカ',
                'mail_address' => 'kimura@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1992-05-17',
                'role' => 4, // 生徒
                'password' => Hash::make('password258'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '山口',
                'under_name' => '恵子',
                'over_name_kana' => 'ヤマグチ',
                'under_name_kana' => 'ケイコ',
                'mail_address' => 'yamaguchi@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1993-06-18',
                'role' => 3, // 教師（英語）
                'password' => Hash::make('password369'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '田中',
                'under_name' => '健一',
                'over_name_kana' => 'タナカ',
                'under_name_kana' => 'ケンイチ',
                'mail_address' => 'kenichi@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1988-02-15',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password456'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '佐藤',
                'under_name' => '美咲',
                'over_name_kana' => 'サトウ',
                'under_name_kana' => 'ミサキ',
                'mail_address' => 'misaki@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1995-11-22',
                'role' => 4, // 生徒
                'password' => Hash::make('password789'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
