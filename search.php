<?php
 
include 'connect.php';
if(isset($_GET["name"]))
{
  if($_GET["name"]!="")
  {
   $name = $_GET["name"];
   $qry = "select * from cars where name like '%$name%' limit 4"; 
   $res = mysqli_query($con,$qry);
 
  if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_array($res))
    {
      echo "<a href='car_profile.php?name=$row[0]' class='result'>$row[0]</a>"; 
    }
   }
  else{
     echo "Sorry Match Could Not Be Found !";
  }
 }

}
?>