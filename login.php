<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
	* {
		margin:0;
		padding:0;
		box-sizing: border-box;
	}

	#container {
		width: 250px;
		height: 250px;
		margin:5% auto;
		border:2px solid black;
		font-size: 1em;
	}
	#formcontainer {
		width: 100%;
		height: 100%;
		padding: 10px;
		font-size: 1.2em;
	}
	input {
		padding: 10px;
		
	}
	input[type="submit"] {
		margin:10px auto;
	}
	</style>
</head>
<body>
	<div id="container">
		<form action="index.php" method="post" id="formcontainer">
			<span>Username:</span><input type="text" name="username" placeholder="please enter your username" maxlength="50">
			<br>
			<span>Password:</span> <input type="password" name="password" placeholder="please enter your password" maxlength="32">
			<br>
			<input type="submit" value="enter" name="submit">
		</form>
	</div>
</body>
</html>