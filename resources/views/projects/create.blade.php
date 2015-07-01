@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Create Project</h2>
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				{!! Form::model(new App\Project, array('route' => array('projects.store'))) !!}
					@include('projects/partials/_form', array('submit_text' => 'Create Project'))
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection