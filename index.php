<?php
if(isset($_POST['name'])){
  $num = rand(6,15);
  $name = $_POST['name'] . ' ' . $num;
}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Concatenate Random Number to Name</title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
     <div class="container">
       <h1 class="text-center"> Concatenate Random Number to Name</h1>
       <form class="" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
         <div class="form-group">
          <label for="text">You Name:</label>
          <input type="text" class="form-control" name="name">
        </div>
          <button type="submit" class="btn btn-default">Submit</button>
       </form>
     </div>
     <hr>
<?php   if (isset($name)) {       ?>
<div class="jumbotron text-center">
         <h2> <?php echo $name; ?> </h2>
</div>
<?php     }       ?>
<div class="text-right">
  <a href="catjs.html">JavaScript version</a>

</div>
   </body>
 </html>
