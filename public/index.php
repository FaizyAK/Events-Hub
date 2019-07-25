<?php

include('../models/config.php');

    ?>
<!DOCTYPE html>
<html>
    <title>Events Hub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css"> -->   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/foundation.min.css"> -->
    <link rel="stylesheet" href="fonts/gfonts.css">
    <link rel="stylesheet" href="css/newc.scss">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/set.css">
    <!-- jQuery library -->
    <script src="js/jquery.js"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

    <style>
        
    #description{
        padding:10%;
    }
        
        .form-group{
            margin-top:25%;


    }
    .form-group input, .form-group button{
    margin-bottom: 10px;
    width: 60%;
    }

    #pd1{
        color: black!important;
    }


    #pd2{
        color: blue!important;
    }

    .pd{
        letter-spacing: 7px;
        font-size: 60px;
    }
    /* @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
    */
    body,h1,h2,h3,h4,h5,h6 {font-family: monospace}
    .w3-bar-block .w3-bar-item {padding:20px}
    </style>




    <body>

        <!-- Sidebar (hidden by default) -->
       
        <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:5;width:15%;min-width:300px" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()"
                class="w3-bar-item w3-button">Close Menu</a>
            <a href="index.php?something=leisure" onclick="w3_close()" class="w3-bar-item w3-button">Leisure Events</a>
            <a href="index.php?something=sports" onclick="w3_close()" class="w3-bar-item w3-button">Sports Events</a>
            <a href="index.php?something=organizational" onclick="w3_close()" class="w3-bar-item w3-button">Organizational Events</a>
            <a href="index.php?something=special" onclick="w3_close()" class="w3-bar-item w3-button">Special Events</a>
            <a href="index.php?something=other" onclick="w3_close()" class="w3-bar-item w3-button">Other Events</a>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">All Events</a>
            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
        </nav>

        <!-- Top menu -->
        <div class="w3-top">
            <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left"  onclick="w3_open()">☰</div>         
                <div class="w3-center w3-padding-16">
                    <h1><span id='pd1' class="pd"><br> E<br>v<br>e<br>n<br>t<br>s</span><span class="pd" id='pd2'><br>H<br>U<br>B</span></h1>
                </div>
                <div class="w3-right w3-padding-16"><img id="logo-img" width=100% src="img/logo.jpg" alt="logo"></div>
            </div>
        </div>
        <div class="rest">
        <div class="col-md-6" id="description">
         <h1>Create Good Vibes!</h1>
        </div>
        <div class="col-md-6">
            <div class = "logi">
                <form action="login.php" id="report_form" method = "post">
                    <div class="form-group">
                        <input type="text" name = "email" class="form-control" placeholder="Enter your Email" required>
                        <input type="password" name="password" class="form-control" placeholder= "Enter your Password" required>
                        <button type="submit" class="btn btn-danger">LOG IN</button>
                        <br><div>or <a data-toggle="modal" data-target="#register">Register</a> for an account.</div>
                    </div>
                </form>
                <div id="register" class="modal fade" role="dialog" >
                    <div class="modal-dialog" >

                        <!-- Modal content-->
                        <div class="modal-content" >
                          <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">REGISTER</h4>
                            </div>
                            <div class="modal-body">
                                <form action="register.php" method = "POST">
                                    <fieldset>
                                        <input class="form-control" required="required" type="text" name="email" placeholder="Enter your Email"/><br/>
                                        <input class="form-control" required="required" type="text" name="name" placeholder="Enter your name"/><br/>
                                        <select class="form-control" name="place" required="required" placeholder="Select Place">
                                            <option value="Udupi">Udupi</option>
                                            <option value="Manipal">Manipal</option>
                                            <option value="Mangalore">Mangalore</option>
                                            <option value="Uppala">Uppala</option>
                                            <option value="Kumbla">Kumbla</option>
                                            <option value="Kasaragod">Kasaragod</option>
                                        </select><br/>
                                        <input class="form-control" required="required" type="password" name="password" placeholder="Enter password"/><br/>
                                        <input class="form-control" required="required" type="password" name="password-retype" placeholder="Re-type password"/><br/>
                                        <b>Gender :</b> <input class="form-control" type="radio" value="male" name="gender" checked>Male<input class="form-control" type="radio" value="female" name="gender">Female <br/>
                                        <button class="form-control" type="submit">
                                            Register
                                        </button><br/>        
                                    </fieldset>
                                </form>
                                
                            </div>     
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    
    <!-- !PAGE CONTENT! -->
            <div  id="eventcat" class="container" style="float: left;margin-left:8%; width: 100%; padding:20px;">
                <div class="col-md-2 focus-grid">
                    <a href="index.php?something=leisure">
                        <div class="focus-border">
                            <div class="focus-layout">
									<div class="focus-image"><i class="fa fa-mobile"></i></div>
									<h4 class="clrchg">Leisure Events</h4>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-md-2 focus-grid">
                        <a href="index.php?something=sports">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Sports Events</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="index.php?something=organization">
                            <div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-book"></i></div>
									<h4 class="clrchg">Organizational Events</h4>
								</div>
							</div>
						</a>
                    </div>
                    <div class="col-md-2 focus-grid">
						<a href="index.php?something=special">
							<div class="focus-border">
                                <div class="focus-layout">
									<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Special Events</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="index.php?something=other">
							<div class="focus-border">
                                <div class="focus-layout">
									<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Other Events</h4>
								</div>
							</div>
						</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>

           
    <!-- Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        
        <?php
    //        include('../models/config.php');
        
    $conn=dbconnect();
            if(isset($_GET['something'])){
            $something= htmlspecialchars($_GET['something']);
            if($something == 'leisure')
            $query="SELECT * FROM items where category= 'leisure'";
            else
            if($something == 'sports')
            $query="SELECT * FROM items where category= 'sports'";
            else
            if($something == 'organization')
            $query="SELECT * FROM items where category= 'organization'";
            else
            if($something == 'special')
            $query="SELECT * FROM items where category= 'special'";
            else
            if($something == 'other')
            $query="SELECT * FROM items where category= 'other'";
            }
            else {
                $query="SELECT * FROM items;";
            }
            $result =$conn->query($query);
            if($result->num_rows>0){
                $itemsu = item_maker($result);
                echo $itemsu;
            }
            else{
                echo "No Events Currently related to This Category";
            }
    ?>  
        
    </div>
    
    
    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
    </div>
    
    <hr id="about">

    <!-- About Section -->
    <div class="w3-container w3-padding-32 w3-center">  
        <h3>About Us</h3><br>
        <!-- <img src="/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533"> -->
        <div class="w3-padding-32">
        <h4><b>Make your events better!</b></h4>
        <h6><i>With Passion For Real</i></h6>
        <p>Post your events and advertise for free!</p>
        </div>
    </div>
        </div>
    <hr>
    
    <!-- Footer -->
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

    <script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>

</body>
</html>
