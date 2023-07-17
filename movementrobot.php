
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Movement</title>
   
  
</head>
<body>
<div class="container">
<form action="diraction.php" method="post">
  <button class="diraction" name="Forward" id="Forward" >Forward</button><br><br>
        <button class="diraction"  name="Left" id="Left">Left</button>
        <button class="diraction"  name="Stop" id="Stop">Stop</button>
        <button class="diraction"  name="Right" id="Right">Right</button><br><br>
        <button class="diraction"  name="Backward" id="Backward">Backward</button>
   
</div>
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