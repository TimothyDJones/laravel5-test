@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>{{ $project->name }}</h2>
	<div class="row">
		<div class="col-md-4 col-sm-6">
			
			@if ( !$project->tasks->count() )
				Project '{{ $project->name }}' has no tasks.
			@else

					@foreach ( $project->tasks as $task )
						<div class="panel panel-default">
						{!! Form::open(array('class' => 'form-inline',
								'method' => 'DELETE',
								'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
							<a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>
							(
								{!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}, 
								{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
							)
						{!! Form::close() !!}
						</div>
					@endforeach

			@endif
			
			<p>
				{!! link_to_route('projects.index', 'Back to Projects') !!}
				{!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}
			</p>
		</div>
	</div>
@endsection