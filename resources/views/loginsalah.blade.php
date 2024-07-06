
@if(Auth::chek())
	<form action=”{{route}}” method=”POST”>
	@csrf
	 	<button type=”submit”>logout</button>
</form>
<p> Name : {{$user-> name}} </p>
<p> Email : {{$user->email}}</p>
<p>ID ;{{$id}}</P>
@else
	<!-- <a href=”{{ route(‘login’) }}”>Login</a>
<a href=”{{ route (‘register’)}}”>register</a> -->
@endif
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Manajemen Stock</title>
</head>
<body>
	<div class="loader">
	<div class="cell d-0"></div>
	<div class="cell d-1"></div>
	<div class="cell d-2"></div>

	<div class="cell d-1"></div>
	<div class="cell d-2"></div>
	
	
	<div class="cell d-2"></div>
	<div class="cell d-3"></div>
	
	
	<div class="cell d-3"></div>
	<div class="cell d-4"></div>
	
	
	</div>
</body>
</html>