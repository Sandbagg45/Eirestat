<?php
if(!isset($_POST["loginbtn"]))
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
else
{
  include "../Model/session.php";
  include '../Model/Tournie_API.php';

  AttemptLogin();
}
