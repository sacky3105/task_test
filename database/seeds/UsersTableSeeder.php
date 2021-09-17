<?php

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
        //
        DB::table('users')->insert([
            ['name' => '桜木花道',
            'email' => 'sakuragi@shohoku.com',
            'password' => Hash::make('juken0812')],
            ['name' => '安西',
            'email' => 'anzai@shohoku.com',
            'password' => Hash::make('takutaku0031')]
        ]);
    }
}
