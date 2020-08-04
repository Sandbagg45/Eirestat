<?php

function AttemptRegister()
{
  Require 'dbConnection.php';

  $name = (filter_input(INPUT_POST, 'reg_user', FILTER_SANITIZE_STRING));
  $pass = (filter_input(INPUT_POST, 'reg_password', FILTER_SANITIZE_STRING));

  // Hash the password
  $pass = password_hash($pass, PASSWORD_DEFAULT);

  // Create SQL Template
  $query = $pdo->prepare
  ("

  INSERT INTO user (name, password)
  VALUES(:name, :pass)

  ");

  // Runs and executes the query
  $success = $query->execute
  ([
    'name' => $name,
    'pass' => $pass
  ]);

  // If rows returned is more than 0 Let us know if it inserted or not.
  $count = $query->rowCount();
  if($count > 0)
  {
    echo "Insert Successful";
    header('location: ../View/index.php');
  }
  else
  {
    echo "Insert Failed";
  }
}

//Login user
function AttemptLogin()
{
  Require 'dbConnection.php';

  if (isset($_POST["loginbtn"]))
  {
    $username = filter_input(INPUT_POST, 'login_user', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE name = :login_user";

    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute(['login_user' => $username]);

    if($success && $stmt->rowCount() > 0)
    {
      $result = $stmt->fetch();

      if ($result && password_verify($password, $result['password']))
      {
        // user has logged in
        // can set session variables Here

        // redirect user
        header('location: ../View/main.php');
      }
      else
      {
        // invalid password
        $invalidError = "Invalid Credentials";
        header('location: ../View/index.php?error='.$invalidError);
      }
    }
    else
    {
      // no records found
      $invalidError = "Invalid Credentials";
      header('location: ../View/index.php?error='.$invalidError);
    }
  }
}


//Logout Users
function AttemptLogOut()
{
  session_start(); // Start Session / Resume Current Session
  session_destroy(); // Destroy Session
  header("Location: ../View/index.php"); // Redirect to index page
}
?>
