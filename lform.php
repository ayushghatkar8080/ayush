<?php
if (isset($_POST['lemid'])) {
  $username = mysqli_real_escape_string($db, $_POST['lemid']);
  $password = mysqli_real_escape_string($db, $_POST['lpasswd']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE emid='$username' AND passwd='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['lemid'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: login.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
