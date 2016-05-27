<html>
	<head>
		<style type="text/css">
			.login-container {
			font-size:15px;
			width: 800px;
			position: absolute;
			left: 100px;
			top: 100px;
			}
		</style>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="jumbotron">
			<div class="login-container">
				<form method="POST" action="/auth/login">
				    {!! csrf_field() !!}
				    <br><br>
				    <div>
				        <p class='col-md-2'>User Email</p><span>
				        <input class='col-md-3'type="email" name="email" value="{{ old('email') }}"></span>
				    </div>
				    <br><br><br>
				    <div>
				        <p class='col-md-2'>Password</p>
				        <input class='col-md-3'type="password" name="password" id="password">
				    </div>
				    <br>
				    <br><br>
				    <div>
				        <button class="btn-primary col-md-4 lg" type="submit">Login</button>
				        <button class='col-md-4 btn-default lg'> <a  href="/auth/register">Register as new user</a></button>
				    </div>
				</form>
					
					<br><br><br>
					<a class='col-md-6' href="/"> Back to Homepage</a>
			</div>
		</div>
	</body>
</html>