<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the db
$db = mysqli_connect('localhost', 'root', '', 'registration');

// register user
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

//User already exist check
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Final user registeration
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: main.php');
  }
}



// login user
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

/* assets table functions */
function delete_data($db,$id)
{
    $query = "DELETE FROM `assets` WHERE `invest_id`= $id";
    mysqli_query($db,$query);
}


function asset_data($db,$id){
        $data =array();
        $id= (int)$id;
        $res=mysqli_query($db,"SELECT * FROM `assets` WHERE `invest_id`= $id");
            $data = mysqli_fetch_assoc($res);
            return $data;
}



function update_assets($db,$update_data,$id){
    $update = array();
    foreach($update_data as $field=>$data){
        $update[]= '`'. $field. '`=\''.$data.'\'';
    }

    mysqli_query($db,"UPDATE `assets` SET" . implode(', ',$update) .  " WHERE `invest_id`=$id");
}



?>





