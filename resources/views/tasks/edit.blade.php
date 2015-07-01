@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Edit Task "{{ $task->name }}"</h2>
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				{!! Form::model($task, array('method' => 'PATCH', 'route' => array('projects.tasks.update', $project->slug, $task->slug))) !!}
					@include('tasks/partials/_form', array('submit_text' => 'Update Task'))
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection