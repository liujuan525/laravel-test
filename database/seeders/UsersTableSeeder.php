<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // 生成数据集合
        User::factory()->count(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'May';
        $user->email = 'bingqing0822@163.com';
        $user->avatar = 'http://127.0.0.1:8000/uploads/images/avatar/202309/12/1_1694508055_0PgOC68aXD.jpeg';
        $user->save();
    }
}
