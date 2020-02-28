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
        DB::table('users')->insert([
			[
				'name' => 'bentley',
				'email' => 'joey@moticorp.com',
				'password' => bcrypt('12345'),
			]
		]);
    }
}
