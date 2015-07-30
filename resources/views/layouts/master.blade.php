<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>App Name - @yield('title')</title>
		
		{!! HTML::style('assets/css/bootstrap.min.css') !!}
		
		<!-- http://www.bootstrapzero.com/bootstrap-template/google-plus --> 
		{!! HTML::style('assets/css/google-plus-theme-styles.css') !!}
		{!! HTML::style('assets/css/styles.css') !!}
		
		{!! HTML::script('assets/js/jquery.min.js') !!}
		{!! HTML::script('assets/js/bootstrap.min.js') !!}
		{!! HTML::script('assets/js/jquery.bootstrap-dropdown-hover.min.js') !!}
		
		<!-- AngularJS 
			http://www.codetutorial.io/laravel-5-angularjs-tutorial/
		-->
		{!! HTML::script('assets/js/angular/angular.min.js') !!}
		{!! HTML::script('assets/js/todo-app.js') !!}
	</head>
	<body>
		@section('navbar')
			@include('layouts/partials/navbar')
		@show
		
		@section('sidebar')
			<strong>This is the master sidebar.</strong>
		@show
		<div class="content">
			@if ( Session::has('message') )
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="flash alert-info">
							<p>{{ Session::get('message') }}</p>
						</div>
					</div>
				</div>
			@endif
			
			@if ( $errors->any() )
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="flash alert-danger">
							@foreach ( $errors->all() as $error )
								<p>{{ $error }}</p>
							@endforeach
						</div>
					</div>
				</div>
			@endif
		
			<div class="container">
				@yield('content')
			</div>
		</div>
		
		<!-- Initialize the Bootstrap Dropdown Hover script -->
		<script>
			//$('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover();
			$.fn.bootstrapDropdownHover();
		</script>
	</body>
</html>