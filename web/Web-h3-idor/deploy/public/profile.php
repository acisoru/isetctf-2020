<?php
if( (!(isset($_COOKIE['cook'])) ) ){
	header("Location: /");
}
if (isset($_GET['type'],$_GET['old'],$_GET['user'],$_GET['pass']) && $_GET['type'] === 'ch')
{
	  if(strpos($_GET['user'], ' ') || strpos($_GET['pass'], ' ') || strpos($_GET['user'], '  ') || strpos($_GET['pass'], ' ')){
    die();
  }
	$file = fopen("users.txt", "a") or die("lol");
  $string = file_get_contents("users.txt");
  $string = explode("\n", $string);

    if((in_array($_GET['user'], $string))) {
    	die();
}

}
elseif (isset($_GET['type']) && $_GET['type'] === 'out') {
	setcookie("cook", "", time()-3600);
	header("Location: /");
}
else
{
	echo "
	<!DOCTYPE html>
	<html>
	<head>
  <meta charset='UTF-8'>
  <title>Login</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='css/style.css' media='screen' type='text/css' />
</head>
	<body>


	<div class='box'>
	<h1>Hello, ".base64_decode($_COOKIE['cook'])."</h1>


	<form>
	  Log out:<br>
	  <input type='hidden' name='type' value='out'><br>
	  <input type='submit' value='Log out'>
	</form>
	
	<script>
		const Http = new XMLHttpRequest();
		const url='".base64_decode($_COOKIE['cook']).".txt';
		Http.open('GET', url);
		Http.send();
		Http.onreadystatechange=(e)=>{document.getElementById('demo').innerHTML = Http.responseText}    
	</script>";
	if (base64_decode($_COOKIE['cook']) === 'admin') {
		echo  "U ??! You? again ?    ok go home, here's your flag:      iset{w3LcoM3_To_t3H_1dOR}";
		"
  </div>
</div>

<br>
Our users:<br>
<textarea name='textarea' rows='5' cols='30' disabled>".file_get_contents('users.txt')."</textarea>

  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>
  <script src='js/index.js'></script>


</body>
</html>
";
}
}

