<?php
// not implemented yet, i have the user redirected back to index
session_start();
session_destroy();

header('location:index.php');
