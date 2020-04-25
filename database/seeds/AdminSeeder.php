<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::truncate();

        // 调用factory数据工厂，生成数据
        factory(Admin::class, 10)->create();

        // 修改 第id=6的记录为 用户名为 admin
        Admin::where('id',6)->update(['username'=>'admin']);
    }
}
