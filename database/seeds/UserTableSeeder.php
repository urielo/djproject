<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder

{
    /**
     * @return Command
     */
    public function run()
    {
        DB::table('usuarios')->truncate();
        DB::table('usuarios')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@cnpj.project',
                'password' => bcrypt('admin123')
            ]
        );
    }
}