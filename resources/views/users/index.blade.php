@extends('layouts.master')

@section('title', 'Users')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Users</h2>
	<div class="row">
		<div class="col-md-12 col-sm-6">
				
			@if ( !$users->count() )
				No projects found!
			@else
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Last Name</th>
							<th>First Name</th>
							<th>E-Mail Address</th>
							<th>User Role</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					@foreach ( $users as $user )
						@if ( $user->role->id == 1 )
							<tr class="warning">
						@else
							<tr>
						@endif
							<td>{{ $user->last_name }}</td>
							<td>{{ $user->first_name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->role->role_name }}</td>
							<td></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			@endif
			<p>
				@include('pagination.default', array('paginator' => $users))
			</p>
		</div>
	</div>
@endsection