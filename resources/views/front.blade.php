
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
            background: #c3c3c3;
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
			background: #c3c3c3;
            padding: 20px;
		}

	</style>

</head>
<body style="background-color:#d2d2d2;">

	<header>
		
            <h5 class="fw-bold fs-2">Teacher Portal</h5>
            <nav>
            	<ul>
            		<li style=" list-style: none;"><a href="{{ route('login') }}" class="nav-link fs-4 text-dark">Login</a></li>
            		<li style=" list-style: none; "><a href="{{ route('register') }}" class="nav-link fs-4 text-dark">Register</a></li>
            	</ul>
            </nav>

	</header>


	<div class="container">
		<div class="row">
			<h4 class="display-6 fw-bold  text-center my-4">KinderCare Character Draw System</h4>
		</div>
		<div class="row">
			<img src="{{asset('photos/tt.jpg')}}" class="img-fluid img text-center">
		</div>
	</div>


	<footer class="mt-4">
		<h4 class="fs-5 text-center">Copyright@Group-21,  2022</h4>
	</footer>

</body>
</html>


