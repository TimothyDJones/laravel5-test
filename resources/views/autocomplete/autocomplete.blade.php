@extends('layouts.master')

@section('title', 'Laravel Auto-complete Example')

@section('sidebar')
	@parent
	
	<p>Content added to sidebar by view.</p>
@endsection

@section('content')
	<h2>Laravel Auto-complete Example</h2>
	
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				{!! Form::open() !!}
				{!! Form::label('auto', 'Find a color: ') !!}
				{!! Form::text('auto', '', array('id' => 'auto')) !!}
				<br />
				{!! Form::label('response', 'Our color key: ') !!}
				{!! Form::text('response', '', array('id' => 'response', 'disabled' => 'disabled')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		$(function() {
			$("#auto").autocomplete({
				source: "getdata",
				minLength: 1,
				select: function( event, ui ) {
					$('#response').val(ui.item.id);
				}
			});
		});
	</script>
@endsection