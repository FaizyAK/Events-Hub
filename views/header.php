<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="../public/css/style.css">
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- jQuery library -->
        <script src="../public/js/jquery.js"></script>

        <!-- Latest compiled Bootstrap JavaScript -->
        <script src="../public/js/bootstrap.js"></script>
        
        <?php if (isset($title)): ?>
            <title>EventsHUB: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>EventsHUB</title>
        <?php endif ?>
    
    </head>

    <body>
    <header class = "header">

<!-- row 1 start -->
<div class="row row1">
     <div class="container">
         <div class="col-md-6 row1_col1">
            <a href="index.php" <h1><span id='pd1' class="pd"> Events</span><span class="pd" id='pd2'>HUB</span></h1> </a>
            </div>
           
         <div class="col-md-6 row1_col2">
             
             
         </div>
     </div>
</div>

</header>

        <div class="container">
        <?php 
      if(!empty($_SESSION['id'])){
         $conn=dbconnect();
         $query="SELECT * FROM users WHERE id=".$_SESSION['id'];
         $result=$conn->query($query);
         $row=$result->fetch_assoc();
         echo "<h1><b>WELCOME,</b><a href='portofolio.php'>".$row['name']."</a></h1></br>";
      }
      
      if(!in_array($_SERVER['PHP_SELF'],["/sell.php","/login.php","/register.php","/index.php"]))
      {
          echo "<button type='button' class='btn'><a href='sell.php'>Post an Event</a></button>";
      }
      if(!empty($_SESSION['id'])){
          echo "<button type='button' class='btn btn-danger'><a href='logout.php'>Logout</a></button>";
      }
?>

            
       
    
    
    
    </body>
</html>