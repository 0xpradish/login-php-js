

<?php
session_start();
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

if(isset($_POST["action"]) && $_POST["action"] == "login") {
  login();
}

function login() {
  global $redis;
  $conn = mysqli_connect("localhost", "root", "", "login");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){
    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $sessionId = session_id();
      $redis->set($sessionId, json_encode($row));
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      exit;
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>
