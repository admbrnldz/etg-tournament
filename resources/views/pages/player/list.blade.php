@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="featurette-heading">List of Players</h2>
		</div>
		<div class="panel-body" style="overflow: auto; height: 600px;">
			<table class="table table-hover">
					<th>Name</th><th>Email</th>
					@foreach ($data as $datum)
					<tr>
						<td>{{ $datum['name'] }}</td>
						<td>{{ $datum['email'] }}</td>
					</tr>	
					@endforeach
			
			</table>				
		</div>
	</div>
	</div>
</section>
@endsection