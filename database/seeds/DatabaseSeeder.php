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
        factory(App\User::class)->create(
            [
                'name' => 'Admin',
                'email' => 'admin@voucasarmagra.com.br',
                'password' => bcrypt('vou2016amsterdan'),
                'remember_token' => str_random(10),
            ]
        );
        // $this->call(UsersTableSeeder::class);
    }
}
