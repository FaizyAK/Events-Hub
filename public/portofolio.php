<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Latest compiled Bootstrap JavaScript -->
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/style.css">
<?php
    include('../models/config.php');
    require('../views/header.php');
    $conn = dbconnect();
    function item_maker2($result){

        $items = "<figure ><div class='row' id='inrow'>";
        while($row=$result->fetch_assoc()){
            $items = $items."<div class = col-md-4 id='effect-bubba' wowload fadeInUp><img width=300px height=250px src='".$row['image']."' alt='thumbnail' /> <br><figcaption><h2> ".$row['title']." </h2> ".$row['category']."<br><a data-toggle='modal' data-target='#".$row['id']."'>View more</a></figcaption><div id='".$row['id']."' class='modal fade' role='dialog' >
            <div class='modal-dialog' >
                <div class='modal-content' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        <h4 class='modal-title'><b>".$row['title']."</b></h4>
                    </div>
                    <div class='modal-body'>
                        <p>".$row['description']."</p>
                        <p><b>Category: </b>".$row['category']."
                        </p>                  
                        <p><b>Time: </b>".$row['time']."
                        </p>
                        <p><b>Venue: </b>".$row['place']."
                        </p>
                        <p>This event is posted on: ".$row['date']."
                        </p>
                        <p><a href=remove.php?id=".$row['id'].">Remove</a></p>
                    </div>     
                </div>
            </div>
          </div></div>";
        }
        
        $items=$items."</div></figure>";
        return $items;
    }
    $query = "SELECT * FROM items WHERE user_id=".$_SESSION['id'];
    $result = $conn->query($query);
?>
<?php if($result->num_rows>0){
            $itemsu = item_maker2($result);
            echo $itemsu;
        }
        else{
            echo "No Events ";
        }?>

<!-- Footer -->
<footer>
<div class="w3-row-padding w3-padding-32">
        <div class="row footer">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row footer-row">
                                <div class="col-md-4 col1">
                                    <center>EVENTS HUB IND</center>
                                </div>

                                <div class="col-md-4">
                                    <center>All Rights Reserved &copy; 2018</center>
                                </div>

                                <div class="col-md-4">
                                    <center>PiJaanWEB </center>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>   
        </div>
    <!-- End page content -->
    </footer>


