@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Create Task for Project "{{ $project->name }}"</h2>
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				{!! Form::model(new App\Task, array('route' => array('projects.tasks.store', $project->slug))) !!}
					@include('tasks/partials/_form', array('submit_text' => 'Create Task'))
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection