<?php

use Illuminate\Database\Seeder;
//use Hash;

use Faker\Factory as Faker;

use App\User;

class UsersTableSeeder extends Seeder {

	public function run() {
		
		/**
		 *  See http://stackoverflow.com/questions/29448404/faker-and-laravel-5
		 *  for method used to generate users via 'Faker' package.
		 */
		 
		$faker = Faker::create();
	
		DB::table('users')->delete();
		
		$roleIds = App\Role::lists('id');
		
		User::create(array(
			'first_name' => 'First',
			'last_name' => 'Last',
			'email' => 'test@test.com',
			'password' => Hash::make('password'),
			'active_ind' => true,
			'role_id' => 1,
			'created_at' => new DateTime,
			'updated_at' => new DateTime,
		));
		
		// Create a few 'Administrator' users
		foreach ( range(1, 2) as $index) {
			User::create(array(
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'email' => $faker->email,
				'password' => Hash::make($faker->word),
				'active_ind' => $faker->boolean($chanceOfGettingTrue = 90),
				'role_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			));
		}
		
		// Create several 'Super User' users
		foreach ( range(1, 5) as $index) {
			User::create(array(
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'email' => $faker->email,
				'password' => Hash::make($faker->word),
				'active_ind' => $faker->boolean($chanceOfGettingTrue = 90),
				'role_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			));
		}		
		
		// Create many 'User' users
		foreach ( range(1, 100) as $index) {
			User::create(array(
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'email' => $faker->email,
				'password' => Hash::make($faker->word),
				'active_ind' => $faker->boolean($chanceOfGettingTrue = 90),
				'role_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			));
		}		
		
		
		//DB::table('users')->insert($users);
	}
	
}