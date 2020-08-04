<?php


try
{
    //$pdo->query(FLUSH HOSTS);

    //At Home DB
    // $host ='localhost';
    // $dbname = 'tournie';
    // $un = 'root';
    // $pw = '';

    // At Collage DB.database requires set up
    $host = 'studentnet.dundeeandangus.ac.uk';
  	$dbname = 'db_1753734';//oliver_dickens
    $un = '1753734';
    $pw = password;

    $pdo = new PDO ('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',$un,$pw);
}
catch (PDOException $ex)
{
  print "Error!: " . $ex->getMessage() . "<br/>";
    Die("Connection Failed");
}
?>
