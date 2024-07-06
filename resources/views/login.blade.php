<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ismail Marzuki Web Manajemet Stock</title>
  <link rel="stylesheet" href="/css/logincss.css">

</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">

        @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
        @endif

			<form class="login" action="{{ route('actionlogin') }}" method="POST">
            @csrf
                <h3>Manajemet Stock</h3>
                
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" name="email" placeholder="User name / Email" required="">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name ="password" placeholder="Password" required="">
				</div>
				<button type="submit" class="button login__submit">
					<span class="button__text">Log In Now</span>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>