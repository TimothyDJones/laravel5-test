@extends('layouts.master')

@section('title', 'To Do App')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	
	<div class="container" ng-app="todoApp" ng-controller="todoController">
		<h2>To Do App</h2>
		<div class="row">
			<div class="col-md-4">
				{!! Form::text('title', null, array('ng-model' => 'todo.title')) !!}
				{!! Form::text('description', null, array('ng-model' => 'todo.description')) !!}
				{!! Form::submit('Add', array('class' => 'btn btn-primary btn-md', 'ng-click' => 'addTodo()')) !!}
				<i ng-show="loading" class="fa fa-spinner fa-spin"></i>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-md-4">
				<table class="table table-striped">
					<tr ng-repeat='todo in todos'>
						{{-- <td>{!! Form::checkbox('done', array('ng-true-value' => '1', 'ng-false-value' => '0', 'ng-model' => 'todo.done', 'ng-change' => 'updateTodo(todo)')) !!}</td> --}}
						<td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="todo.done" ng-change="updateTodo(todo)"></td>
						<td><% todo.title %></td>
						<td><% todo.description %></td>
						<td><button class="btn btn-danger btn-xs" ng-click="deleteTodo($index)"> <span class="glyphicon glyphicon-trash"></span> </button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

@endsection