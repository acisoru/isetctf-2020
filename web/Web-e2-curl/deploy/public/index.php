<?php

function curl($target){
	$result=shell_exec('curl -vvv -L -sD - -o /dev/null '.$target);
  
  echo '
  
  <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Мой секретный сервер</title>
<style>
   body {
    background: url(server.jpg) no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
   }
  </style>
                                               
</head>
<body>
<div class="header">

    <h1 class="md-display-3" align="center">Online curl command line builder</h1>

</div>
<form>
<div class="color_block" align="center">
  <h1 align="center">      '.$result; echo '    </h1><br>

</div>
</form> 
<div class="footer" align="center">
    <p>by <a href="https://t.me/dikidikiday" target="_blank">@dikidikiday</a> </p>
</div>
</body>
</html>
  
  
  ';
}

if (isset($_GET['curl']) && !empty($_GET['curl']) &&!preg_match('/\s+/',$_GET['curl'])){
	curl($_GET['curl']);
}
else{
	echo '
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Мой секретный сервер</title>
<style>
   body {
    background: url(server.jpg) no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
   }
  </style>
</head>
<body>
<div class="header">

    <h1 class="md-display-3" align="center">Online curl command line builder</h1>

</div>
<form>
<div class="color_block" align="center">
  <h1 align="center">WOW!!!</h1><br>
  <h1 align="center">Curl it:</h1><br>
  <input type="text" name="curl"><br>
  <input type="submit" value="GO!">
</div>
</form> 
<div class="footer" align="center">
    <p>by <a href="https://t.me/dikidikiday" target="_blank">@dikidikiday</a> </p>
</div>
</body>
</html>';

}

