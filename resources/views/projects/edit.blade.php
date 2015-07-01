@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Edit Project</h2>
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				{!! Form::model($project, array('method' => 'PATCH', 'route' => array('projects.update', $project->slug))) !!}
					@include('projects/partials/_form', array('submit_text' => 'Update Project'))
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection