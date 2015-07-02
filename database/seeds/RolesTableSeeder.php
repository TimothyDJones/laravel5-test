<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

	public function run() {
	
		DB::table('roles')->delete();
		
		$roles = array(
			array('id' => 1, 'role_name' => 'Administrator', 'role_description' => 'Full access to all functions.', 'active_ind' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 2, 'role_name' => 'Super User', 'role_description' => 'All capabilities except user/role administration.', 'active_ind' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 3, 'role_name' => 'User', 'role_description' => 'Regular user.', 'active_ind' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime),
		);
		
		DB::table('roles')->insert($roles);
	}
	
}