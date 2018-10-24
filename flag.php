<?php 
$flag = '';
if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
	if($_COOKIE['user'] === 'admin'){
		$flag = 'PISCTF{eZ_fl4g_Ez_l1fe}';
	} else {
		$mess = 'Only admin can view this site';
	}
} else {
	$cookie_name = "user";
	$cookie_value ='user';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Welcome to PIS CLub</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"><a href="index.php">PTITCTF</a></h3>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading"><?php if($flag) { ?>
	<p><?php echo $flag ?></p>
<?php } else { ?>
	<p><?php echo $mess ?></p>
<?php } ?></h1>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://www.facebook.com/splayer1248"> spl4yer</a>
    </div>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>