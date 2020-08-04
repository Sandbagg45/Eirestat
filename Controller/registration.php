<?php

if(!isset($_POST["registerbtn"]))
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
else
{
  include "../Model/session.php";
  include '../Model/Tournie_API.php';

  AttemptRegister();
}
?>
