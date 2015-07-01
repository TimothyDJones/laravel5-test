<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

	public function run() {
	
		DB::table('tasks')->delete();
		
		$tasks = array(
			array('id' => 1, 'name' => 'Task 1', 'slug' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'My first task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 2, 'name' => 'Task 2', 'slug' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'My second task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 3, 'name' => 'Task 3', 'slug' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'My third task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 4, 'name' => 'Task 4', 'slug' => 'task-4', 'project_id' => 1, 'completed' => true, 'description' => 'My fourth task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 5, 'name' => 'Task 5', 'slug' => 'task-5', 'project_id' => 1, 'completed' => true, 'description' => 'My fifth task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 6, 'name' => 'Task 6', 'slug' => 'task-6', 'project_id' => 2, 'completed' => true, 'description' => 'My sixth task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 7, 'name' => 'Task 7', 'slug' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'My seventh task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 8, 'name' => 'Task 8', 'slug' => 'task-8', 'project_id' => 3, 'completed' => true, 'description' => 'My eighth task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			array('id' => 9, 'name' => 'Task 9', 'slug' => 'task-9', 'project_id' => 3, 'completed' => false, 'description' => 'My ninth task...', 'created_at' => new DateTime, 'updated_at' => new DateTime),
		);
		
		DB::table('tasks')->insert($tasks);
	}
	
}