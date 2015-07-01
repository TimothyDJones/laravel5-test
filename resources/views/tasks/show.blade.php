@extends('layouts.master')

@section('title', 'Tasks')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				<h2>
					{!! link_to_route('projects.show', $project->name, [$project->slug]) !!} - 
					{{ $task->name}}
				</h2>
	
				{{ $task->description }}
			</div>
		</div>
	</div>
@endsection