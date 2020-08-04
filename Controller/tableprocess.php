<?php
// Initialising veriables
$id = 0;
$pos = "";
$teamname = "";
$played = "";
$goalsfor = "";
$goalsagainst ="" ;
$goaldifference ="" ;
$points = "";

//table page(should this be in tournie.api)
//if savebutton is pressed do insert data
if(isset($_POST['savebtn'])){
    $pos = $_post['pos'];
    $teamname = $_post['teamname'];
    $played = $_post['played'];
    $goalsfor = $_post['goalsfor'];
    $goalsagainst = $_post['goalsagainst'];
    $goaldifference = $_post['goaldifference'];
    $points = $_post['points'];

    $query="INSERT INTO tournietable (pos,teamname,played,goalsfor,goalsagainst,goaldifference,points)
    VALUES('$pos','$teamname',' $played','$goalsfor','$goalsagainst','$goaldifference','$points')";
    pdo_query($dbname, $query);
    header('location: ../View/table.php');//redirect to the table page after inserting
}
 // $results = pdo_query($dbname, "SELECT * FROM tournietable");

//table insert function
function TableInsert()
{
if($insert > 0)
{
  echo "Insert Successful";
  header('location: ../View/table.php');
}
else
{
  echo "Insert Failed";
}
}

?>
