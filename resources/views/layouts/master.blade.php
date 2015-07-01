<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>App Name - @yield('title')</title>
		
		{!! HTML::style('assets/css/bootstrap.min.css') !!}
		
		<!-- http://www.bootstrapzero.com/bootstrap-template/google-plus --> 
		{!! HTML::style('assets/css/google-plus-theme-styles.css') !!}
		
		{!! HTML::script('assets/js/bootstrap.min.js') !!}
	</head>
	<body>
		@section('sidebar')
			<strong>This is the master sidebar.</strong>
		@show
		<div class="content">
			@if ( Session::has('message') )
				<div class="flash alert-info">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif
			
			@if ( $errors->any() )
				<div class="flash alert-danger">
					@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif
		
			<div class="container">
				@yield('content')
			</div>
		</div>
	</body>
</html>