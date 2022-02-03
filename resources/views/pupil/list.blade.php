<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@extends('layouts.app')
@section('content')


<div class="container">

	<div class="row">
		<h4 class="text-center fw-bold">Registered Pupils</h4>
	</div>

	<div class="row">

		<table class="table table-bordered">

			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">UserCode</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Phone Number</th>
					<th scope="col">Status</th>
				</tr>
			</thead>

			<tbody>

				@foreach ($pupil as $pupil)
				
				<tr>
					<th scope="row">{{ ++$i }}</th>
					<td>{{ $pupil->code }}</td>
					<td>{{ $pupil->firstName }}</td>
					<td>{{ $pupil->lastName }}</td>
					<td>{{ $pupil->phone }}</td>
					<td>
						<a href="#" class="btn btn-primary">De-activate</a>
						<form action="{{ route('pupil.destroy', $pupil->id)}}" >
							<a href="{{ route('pupil.edit', $pupil->id)}}" class="btn btn-info">Edit</a>
							@crsf
						</form>
					</td>
				</tr>
				@endforeach

			</tbody>
			
		</table>
		{!! $pupil->links() !!}
		
	</div>

</div>


@endsection


</body>
</html>