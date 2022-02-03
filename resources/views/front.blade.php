
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>front</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<style type="text/css">
		header
		{
            background: #670e10;
            padding: 30px;
            display: flex;
            justify-content: space-between;
		}


		ul{
			display: flex;
		}

		.img{
			
			width: 500px;
			height: 400px;
			margin-left: auto;
			margin-right: auto;

		}

		footer{
			background: #670e10;
            padding: 20px;
		}

	</style>

</head>
<body>

	<header class="bg-primary">
		
            <h5 class="fw-bold fs-2 text-light">Teacher Portal</h5>
            <nav>
            	<ul>
            		<li style=" list-style: none;"><a href="{{ route('login') }}" class="nav-link fs-4 text-light">Login</a></li>
            		<li style=" list-style: none; "><a href="{{ route('register') }}" class="nav-link fs-4 text-light">Register</a></li>
            	</ul>
            </nav>

	</header>


	<div class="container">
		<div class="row">
			<h4 class="display-6 fw-bold  text-center my-4 text-primary">KinderCare Character Draw System</h4>
		</div>
		<div class="row">
			<img src="{{asset('photos/tt.jpg')}}" class="img-fluid img text-center">
		</div>
	</div>


	<footer class="mt-4 bg-primary">
		<h4 class="fs-5 text-center text-light">Copyright@Group-21,  2022</h4>
	</footer>

</body>
</html>


