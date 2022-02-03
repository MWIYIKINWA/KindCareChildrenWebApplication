<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>regForm</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@extends('layouts.app')
@section('content')

<div class="container">

	<div class="row my-4">
		<h4 class="text-center fw-bold">Edit Pupil</h4>
	</div>

	<div class="row mr-auto ml-auto mt-3">

		@if ($errors->any())

		<div class="alert alert-danger">
			<strong>Fill the fields correctly please</strong>
			<ul>
				@foreach ($errors->all() as $error)
				  <li>{{ $error }}</li>
				  @endforeach
			</ul>
			
		</div>

		@endif

		<form method="POST" action="{{ route('pupil.update', $pupil->id) }}">

			@csrf
			@method('PUT')
			
              <div class="form-group">
              	  <label class="form-label">First Name</label>
              	  <input type="text" name="firstName" class="form-control">
              </div>

              <div class="form-group">
              	  <label class="form-label">Last Name</label>
              	  <input type="text" name="lastName" class="form-control">
              </div>

              <div class="form-group">
              	  <label class="form-label">Phone Number</label>
              	  <input type="text" name="phone" class="form-control">
              </div>

              <div class="form-group">
              	  <label class="form-label">User Code</label>
              	  <input type="text" name="code" class="form-control">
              </div>

              <button class="btn btn-secondary mt-3" type="submit" name="register">Update</button>


		</form>
	</div>
</div>

@endsection


</body>
</html>