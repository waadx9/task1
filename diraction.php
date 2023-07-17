<html>
<body>
  <form action="movementrobot.php" method="post">
  </form>
<style>
 body {
    background:rgb(255, 255, 255); 
    color:white;
    font-size: 16px;
  }
   
   
  .container {
    max-width: 500px;
    margin: auto;
    padding: 160px 100px;
    text-align: center;
    color: beige;
    background-color:rgb(255, 255, 255) ;
}

   
  button{
    color: rgb(7, 7, 6);
    background-color:rgb(194, 188, 188) ;
    border:none;
    outline:none;
    padding: 10px 12px ;
    border-radius: 10px;
    margin-bottom: 10px;
    margin-left:20px ;
   }
</style>
</body>
</html>
<?php
$SERVER ="localhost";
$username="root";
$password="";
$dbname="diractions";

$conn=mysqli_connect($SERVER,$username,$password,$dbname);

if (isset($_POST["right"])) {
  echo "R";
 $query= "insert into path (direction) values('right')" ;
 mysqli_query($conn,$query);
} if(isset($_POST["left"])){
       echo "L";
      $query= "insert into path (direction) values('left')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["front"])){
       echo "F";
      $query= "insert into path (direction) values('front')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["back"])){
       echo "B";
      $query= "insert into path (direction) values('back')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["stop"])){
       echo "S";
      $query= "insert into path (direction) values('stop')" ;
      mysqli_query($conn,$query);
}

       ?>





