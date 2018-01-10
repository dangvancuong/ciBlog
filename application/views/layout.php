<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<style type="text/css">
	label{
		width: 100px;
		display: inline-block;
	}
</style>
<body>
	<form action="insertUser" method="post">
		<div>
			<label for="name">name: </label>
			<input type="text" name="name" id="name" value="" tabindex="1"/>
		</div>
		<div>
			<label for="name">email: </label>
			<input type="text" name="email" id="name" value="" tabindex="1" />
		</div>
		<div>
			<label for="name">password: </label>
			<input type="text" name="password" id="name" value="" tabindex="1" />
		</div>
	
		 
		<div>
			<input type="submit" value="Submit" />
		</div>
	</form>
</body>
</html>