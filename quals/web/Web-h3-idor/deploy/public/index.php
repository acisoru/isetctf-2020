<?php

function reg(){
  if(strpos($_GET['user'], ' ') || strpos($_GET['pass'], ' ') || strpos($_GET['user'], '  ') || strpos($_GET['pass'], ' ')){
    die();
  }
	$file = fopen("users.txt", "a") or die("lol =)");
  $string = file_get_contents("users.txt");
  $string = explode("\n", $string);

    if(!(in_array($_GET['user'], $string))) {
		fwrite($file, $_GET['user']."\n");
		fclose($file);

		$file = fopen($_GET['user'].".txt", "w");
		fwrite($file,$_GET['user'].' '.$_GET['pass']."\n");
		fclose($file);
    echo '
    
    <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=\'stylesheet prefetch\' href=\'http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css\'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div class="box">
  <h1>Wow! Success!!</h1>
  </div>
</div>
<br>
Our users:<br>
<textarea name="textarea" rows="5" cols="30" disabled>'.file_get_contents("users.txt").'</textarea>
</body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
    ';
    } else{
      echo ' 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=\'stylesheet prefetch\' href=\'http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css\'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div class="box">
  <h1>Registration error</h1>
  </div>
</div>
<br>
Our users:<br>
<textarea name="textarea" rows="5" cols="30" disabled>'.file_get_contents("users.txt").'</textarea>
</body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html> 
      ';
    }
}

function login(){

  if(strpos($_GET['user'], ' ') || strpos($_GET['pass'], ' ') || strpos($_GET['user'], '  ') || strpos($_GET['pass'], ' ')){
    die();
  }
  $string = file_get_contents($_GET['user'].".txt");
  $string = explode(" ", $string);

    if( ($string[0] === $_GET['user']) && (explode("\n", $string[1])[0] === $_GET['pass'])) {
    	setcookie("cook", base64_encode($_GET['user']),time()+600);
    	header("Location: /");
    } else{
      echo '
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=\'stylesheet prefetch\' href=\'http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css\'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div class="box">
  <h1>Login failed</h1>
  </div>
</div>
<br>
Our users:<br>
<textarea name="textarea" rows="5" cols="30" disabled>'.file_get_contents("users.txt").'</textarea>
</body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
      ';
    }
}

  $string = file_get_contents("users.txt");
  $string = explode("\n", $string);

if(isset($_COOKIE['cook']) && (in_array(base64_decode($_COOKIE['cook']), $string))){
	header("Location: /profile.php");
	die();
}

if (isset($_GET['type'],$_GET['user'],$_GET['pass']) && !empty($_GET['type']) && !empty($_GET['user']) && !empty($_GET['pass'])){
	if ($_GET['type'] === 'reg'){
		reg();
		die();
	}
	if ($_GET['type'] === 'log'){
		login();
		die();
	}
	header("Location: /");
}
else{
	echo '
	<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=\'stylesheet prefetch\' href=\'http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css\'>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div class="box">
  <nav id="tabs" class="tabs">
    <a id="tabLogin" class="iconLogin active blueBox" title="Войти"></a>
    <a id="tabRegister" class="iconRegister greenBox" title="Регистрация"></a>
  </nav>
  <div class="containerWrapper">
                                                            <!-- login container -->
    <div id="containerLogin" class="tabContainer active">
      <form>
      <h2 class="loginTitle">Авторизация</h2>
      <div class="loginContent">
		<div class="inputWrapper">
		
		<input class="input100" type="text" placeholder="Login" name="user" pattern="^((?!\s|\t.)*$">
        </div>
        <div class="inputWrapper">
		<input type="password" name="pass"  placeholder="Password" pattern="^((?!\s|\t.)*$">
        </div>
      </div>
	  <button class="blueBox" type="submit" value="Login">
	  <input type="hidden" name="type" value="log">

	  	<span class="iconLogin">
	  	</span> ВОЙТИ
	  </button>
      <div class="clear"></div>
    </form>
    </div>

                                                             <!-- register container -->
    <div id="containerRegister" class="tabContainer">
      <form>
        <h2 class="loginTitle">Регистрация</h2>
        <div class="registerContent">
		  <div class="inputWrapper">
		  
		  <input class="input100" type="text" placeholder="Login" name="user" pattern="^((?!\s|\t.)*$">
		  </div>
		  <div class="inputWrapper">
		  <input type="password" name="pass"  placeholder="Password" pattern="^((?!\s|\t.)*$">
		  </div>
		</div>
		<button class="blueBox" type="submit" value="Register">
		<input type="hidden" name="type" value="reg">
		
		<span class="iconRegister"></span> Зарегистрироваться</button>
        <div class="clear"></div>
      </form>
    </div>
    <div class="clear"></div>

  </div>
</div>
<br>
Our users:<br>
<textarea name="textarea" rows="5" cols="30" disabled>'.file_get_contents("users.txt").'</textarea>
</body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
	';

}