@extends('layouts.master')

@section('title', 'Projects')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Projects</h2>
	<div class="row">
		<div class="col-md-4 col-sm-6">
				
			@if ( !$projects->count() )
				No projects found!
			@else

					@foreach( $projects as $project )
						<div class="panel panel-default">
							{!! Form::open(array('class' => 'form-inline',
										'method' => 'DELETE',
										'route' => array('projects.destroy', $project->slug))) !!}
							<a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
							(
								{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}, 
								{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
							)
							{!! Form::close() !!}
						</div>
					@endforeach

			@endif
			<p>
				{!! link_to_route('projects.create', 'Create Project') !!}
			</p>
		</div>
	</div>
@endsection