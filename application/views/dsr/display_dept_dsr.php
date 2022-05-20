<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Department DSR</title>
  </head>
  <body>
</br>
</br>
<?php $m = $_GET['dept']; ?>
    <center><h3>Government Polytechnic Amravati</h3></center>
    <div class="container"> 
               <center> <h4><?php 
               
               if(isset($_GET['dept'])): 
               $d = $_GET['dept']; 
               echo "----------------------------- " . $d . " DSR Report ----------------------------- "; 
               endif; 
               ?></h4> </center>
            </div>
    <!-- <center><h4>----------------------------- Computer Department DSR Report -----------------------------</h4></center> -->
    <hr>
    <?php
  $i=1;
  foreach($data as $show)
  {
 
 //echo "<td>".$row->Product_ID."</td>";
  $a=$show->Product_ID;
  echo "<h6>&nbsp &nbsp &nbsp Product ID: ".$a."</br>";
  echo "&nbsp &nbsp &nbsp Product Name: ".$show->product_name."</br>";
  echo "&nbsp &nbsp &nbsp Quantity Available: ".$show->qty_distributed."</br>";
  //echo "<td>".$row->qty_remaining."</td>";
  echo "&nbsp &nbsp &nbsp Date Distribution: ".$show->date_distributed."</br>";
  echo "&nbsp &nbsp &nbsp Head Initial: ".$show->head_initials."</br></h6>";
  echo "<hr>";
  $i++;
}
  ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>