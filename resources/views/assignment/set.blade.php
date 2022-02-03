<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>set</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@extends('layouts.app')
@section('content')


<div class="container">

	<div class="row">
		<h4 class="text-center fw-bold">Set Assignments</h4>
	</div>

	<div class="row">
		<form action="">

			<div class="form-group">
				<label class="form-label">Assignement Title</label>
				<input type="text" name="title" class="form-control fw-bold fs-4">
			</div>

			<div class="form-group">
				<label class="form-label">Type Questions</label>
				 <textarea class="form-control" name="questions" type="text" placeholder="Type Questions here" rows="4" ></textarea>
			</div>

           <button class="btn btn-primary mt-3">Set</button>

		</form>
	</div>

	

</div>


@endsection


</body>
</html>