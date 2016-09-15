<html>
<head>

<title>


<?php
include 'connect.php';

$r1;
$r0;
$r2;
$r3;
$r4;
$r5;
$r6;
$r7;
$r8;
$r9;
$r10;
$r11;
$r12;
$r13;
$r14;
$r15;
if(isset($_GET["name"]))
{
 $name = mysqli_real_escape_string($con,$_GET["name"]);
 $qry = "select * from cars where name='$name'";
 $res = mysqli_query($con,$qry);
 
if(mysqli_num_rows($res)>0){
 while($row=mysqli_fetch_array($res))
 {
  echo $row[0]; $r0=$row[0];
  $r1=$row[1];
  $r2=$row[2];$r3=$row[3];$r4=$row[4];$r5=$row[5];$r6=$row[6];$r7=$row[7];$r9=$row[9];$r8=$row[8];
  $r10=$row[10];
  $r11=$row[11];
  $r12=$row[12];
  $r13=$row[12];
  $r14=$row[13];
  $r15=$row[14];
 }
}
else{
  echo "Car Details Not Found !!";
}
}
if(isset($_POST["username"]))
{
 $name = mysqli_real_escape_string($con,$_POST["username"]);
 $qry = "select * from cars where name ='$name' ";
 $res = mysqli_query($con,$qry);
 
if(mysqli_num_rows($res)>0){
 while($row=mysqli_fetch_array($res))
 {
  echo $row[0]; $r0=$row[0];
  $r1=$row[1];
  $r2=$row[2];$r3=$row[3];$r4=$row[4];$r5=$row[5];$r6=$row[6];$r7=$row[8];$r9=$row[9];
  $r10=$row[10];
  $r11=$row[11];
  $r12=$row[12];
  $r13=$row[13];
  $r14=$row[14];
  $r15=$row[15];
 }
}
else{
  echo "Sorry Match Could Not Be Found !";
}
}
?>


</title> 

</head>



<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
@keyframes play{
0%{
background-image:url("<?php echo $r14;?>");
}
50%{
background-image:url("<?php echo $r13;?>");
}
100%{
background-image:url("<?php echo $r15;?>");}
}
#my{
animation-name:play;
animation-duration:10s;
animation-iteration-count:1000;
}
@font-face{
        font-family:base;
        src:url("Sansation_Bold.ttf");
}
@font-face{
    font-family:base2;
    src:url("Sansation_Light.ttf");
}
*{
        font-family:base2;        
        margin:0px;
        padding:0px;
}

.drop{
 color:green;
 position:relative;
 background-color:white;
 border:1px solid white;
 width:600px;
 height:30px;
 color:grey;
 padding-top:10px;
 margin-bottom:15px;
 display:block;
 cursor:pointer;
}
.drop-item{
  display:none;
  background-color:#f1f1f1;
  
}
.drop:active .drop-item{
   overflow:auto;
   margin-top:20px;
   display:block; 
   height:100px;
}
.drop:hover .drop-item{
   margin-top:20px;
   overflow:auto;
   display:block; 
   height:100px;
}
.drop:hover{  
 
  display:block; 
  height:140px;
 
}

.col{
     display:inline-block; 
     border:5px solid white;
     border-radius:100px;
     box-shadow:0px 0px 1px 2px #888;
     text-align:center;
     background-color:#f4b5b5;
     color:white;
     cursor:pointer;
     margin:10px;
     
     width:54px;
     height:54px;
 }
body{
 margin-top:5px;
 min-width:900px;
 background-color:rgba(244,181,181,1);
}
.col:hover{
   
     background-color:rgba(222,59,59,0.9);
     
}
.col:hover p{
     text-align:center;
     padding-top:18px;
     color:white;
    
 }
.st{
 height:20px;

}
#info{
 background-color:#f1f1f1;
 padding-top:40px;
 width:80%;
}
.col p{
 text-align:center;
 padding-top:18px;
}
#disc{
 border:1px solid white;
 width:80%;
 margin-bottom:30px;
 height:300px;   
}

#price{
 border:0px solid white;
 width:80%;
 margin-bottom:30px;
}

th{
 background-color:#999;
 height:40px;
 color:white;
}
td{
 
 text-align:center;
 border:0px solid black;
}
p{
 padding:10px;
 padding-bottom:10px;
 text-align:justify;
}
tr{

 border:1px solid black;
}
h2{
 display:block;
 margin:20px;
}
h5{
   display:block;
   margin:20px;
   text-align:justify;
}
#pic{
 height:300px;
 width:80%;
 background-color:rgba(222,59,59,0.9); /*#f4b5b5;*/
 color:white;
}
.r{
 float:left;
 text-align:left;
 background-color:;
}
.l{
 float:right;
 background-color:green;
}
.l,.r{
  width:50%;
  height:300px;
}
.tsec tr:nth-child(odd){
   background-color: #f4b5b5;
   color:white;
}
.tsec tr:nth-child(even){
  background-color:white;
  color:black;
}
#top{
     width:100%;
 }
 .coli{
     display:inline-block;
     margin-right:10px;
     margin-left:10px;
 }
#info{
    height:700px;
   background-color:rgba(222,59,59,0.7);
}
 #engine-detials{
        background-color:rgba(222,59,59,0.7);
        width:80%;
        height:110px;
      }
.colz{
          width:200px;
          height:40px;
}
    
      .col1{
          width:700px;
          text-align:center|justify;
          
      }
     .col2{
          
          
      }
</style>
<body id="body" >
<div id="top" align="center">
    <div id="pic" class="">
      <div class="r" algin="left">
      <h2><?php echo $r0;?></h2>
       <h5><?php echo $r3;?> </h5>
       </div>
      <div class="l">
      <img src="" id="my" width="100%" height="300px">
      </div>
    </div>
    
</div>

<div align="center">

<div id="engine-detials" >
<hr/>
<div class="st">
</div>
   <div class="coli">
   <div class="col"> 
    <p><?php echo $r5;?> </p>
   </div><br/>MILEAGE
    </div>
   <div class="coli">
   <div class="col"> 
    <p> <?php echo $r9;?> </p>
   </div> <br/>TORQUE
    </div>
   <div class="coli">
   <div class="col"> 
   <p> <?php echo $r11;?> </p>
   </div><br/>ENGINE CC
    </div>
   <div class="coli">
   <div class="col"> 
   <p> <?php echo $r1;?></p>
   </div><br/>
   CYLINDERS
    </div>
   </div>

</div>

</div>

<div align="center">
<div id="info"  align="center">
    
         
     <div class="drop col1" ><b>Performance</b>
       <div class="drop-item">
             <p><?php echo $r4;?></p>
        </div>
      
      </div>

      <div class="drop col1"><b>Comfort</b>
        <div class="drop-item">
             <p><?php echo $r6;?></p>
        </div>
      </div>

      <div class="drop col1"><b>Safety</b>
        <div class="drop-item">
            <p><?php echo $r7;?></p>
        </div> 
      </div>


         
         <table  id="price" class="tsec" algin="center">
         <th>Models</th>
             <th>Price</th>
            <?php echo $r10; ?>
         </table>
    
    
</div>
</div>
</body>
</html>


	