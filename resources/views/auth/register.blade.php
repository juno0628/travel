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
	<form method="POST" action="/auth/register">
	    {!! csrf_field() !!}
	    <br>
	    <div>
	        <p class='col-md-3'>User Name</p>
	        <input class='col-md-6' type="text" name="name" value="{{ old('name') }}">
	    </div>
	    <br><br><br>
	    <div>
	        <p class='col-md-3'>User Email</p>
	        <input class='col-md-6' type="email" name="email" value="{{ old('email') }}">
	    </div>
	    <br><br><br>
	    <div>
	        <p class='col-md-3'>User P/	W</p>
	        <input class='col-md-6' type="password" name="password">
	    </div>
	    <br><br><br>
	    <div>
	        <p class='col-md-3'>Confirm P/W</p>
	        <input class='col-md-6' type="password" name="password_confirmation">
	    </div>
	    <br><br><br><br>
	    <div>
	        <button class="btn-primary col-md-9 lg" type="submit">Register</button>
	    </div>
	    <br><br><br>
			<a class='col-md-6' href="/"> Back to Homepage</a>
	</form>
</div>
</div>
	</body>
</html>
