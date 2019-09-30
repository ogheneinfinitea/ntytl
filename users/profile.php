<?php
// Initialize the session
session_start();

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/jpg" sizes="16x16" href="ntytl_logo.jpg">
    <title>Not Too Young To Lead</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <!--<div class="preloader">-->
    <!--    <div class="cssload-speeding-wheel"></div>-->
    <!--</div>-->
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
<?php  include("includes/topnav_bar.php"); ?>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
       <?php include("includes/leftside_bar.php"); ?>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title"> PROFILE PAGE</h3> 
                        
                        
                        
                        
                        </div>


                    </div>


                    <?php 
                            include("includes/db.php");
                              // }
                              $session_username= $_SESSION['email'];
                            //   echo $session_username; x`
                              $sql="SELECT id, email,surname,firstname,middlename,state_of_origin,lga,gender,marital_status, phone_number,dob,home_address,home_town,bio,ward FROM tbl_users WHERE email ='$session_username'";
                               
                                $result=$mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    $row = $result->fetch_assoc();
                                        
                                    

                            
                                }
                              
                            ?>

                            <!-- <div class="page-wrapper">
            <div class="container-fluid"> -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="white-box">
                            
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12"> <span class="help"> Surname</span></label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="<?php echo $row['surname']; ?>" placeholder="Surname" name="surname"  required> </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                    <div class="col-md-12">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email"> </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-md-12">Firstname</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" name="firstname" required> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Middlename</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Middlename"  value="<?php echo $row['middlename']; ?>" name="middlename" required>   </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Mobile Number</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="phone_number" value="<?php echo $row['phone_number']; ?>" placeholder="Mobile Number" name="mobile" required>  </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-sm-12">Select Gender</label>
                                    <div class="col-sm-12">
                                        <select class="form-control"  value="<?php echo $row['gender']; ?>" name="gender" required>
                                        <option><?php echo $row['gender'];?></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Marital Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="marital_status" required  value="<?php echo $row['marital_status']; ?>">
                                        <option> <?php echo $row['marital_status'];?></option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Widow</option>
                                            <option>Rather Not Say</option>
                                            
                                        </select>
                                
                                </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <label class="col-md-12">DOB</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" value="<?php echo $row['dob']; ?>" placeholder="Date of Birth" name="dob" required></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Resident Address</label>
                                    <div class="col-md-12">
                                        <input type="textarea" class="form-control" placeholder="bio"  value="<?php echo $row['bio']; ?>" name="bio"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">State of Origin</label>
                                    <div class="col-sm-12">
                                        <select name ="state_of_origin" class="form-control" required>
                                        <option value="<?php echo $row['state_of_origin'];?>" > <?php echo $row['state_of_origin'];?></option>

<option value="ABUJA">ABUJA FCT</option>
<option value="ABIA">ABIA</option>
<option value="ADAMAWA">ADAMAWA</option>
<option value="AKWA IBOM">AKWA IBOM</option>
<option value="ANAMBRA">ANAMBRA</option>
<option value="BAUCHI">BAUCHI</option>
<option value="BAYELSA">BAYELSA</option>
<option value="BENUE">BENUE</option>
<option value="BORNO">BORNO</option>
<option value="CROSS RIVER">CROSS RIVER</option>
<option value="DELTA">DELTA</option>
<option value="EBONYI">EBONYI</option>
<option value="EDO">EDO</option>
<option value="EKITI">EKITI</option>
<option value="ENUGU">ENUGU</option>
<option value="GOMBE">GOMBE</option>
<option value="IMO">IMO</option>
<option value="JIGAWA">JIGAWA</option>
<option value="KADUNA">KADUNA</option>
<option value="KANO">KANO</option>
<option value="KATSINA">KATSINA</option>
<option value="KEBBI">KEBBI</option>
<option value="KOGI">KOGI</option>
<option value="KWARA">KWARA</option>
<option value="LAGOS">LAGOS</option>
<option value="NASSARAWA">NASSARAWA</option>
<option value="NIGER">NIGER</option>
<option value="OGUN">OGUN</option>
<option value="ONDO">ONDO</option>
<option value="OSUN">OSUN</option>
<option value="OYO">OYO</option>
<option value="OYO">PLATEAU</option>
<option value="RIVERS">RIVERS</option>
<option value="SOKOTO">SOKOTO</option>
<option value="TARABA">TARABA</option>
<option value="YOBE">YOBE</option>
<option value="ZAMFARA">ZAMFARA</option>

</select>
                                    </div>
                                </div>
                               
                          
                                <div class="form-group">
                                    <label class="col-md-12">LGA</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="LGA" required value="<?php echo $row['lga']; ?>" name="lga"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Home Town</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Home Address" required value="<?php echo $row['home_town']; ?>" name="home_town"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Ward</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="ward" required  value="<?php echo $row['ward']; ?>">
                                        <option> <?php echo $row['ward'];?></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5  </option>
                                             <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10 </option>
                                             <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15  </option>
                                             <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20 </option>                                            
                                        </select>
                                
                                </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Home Address</label>
                                    <div class="col-md-12">
                                        <input type="" class="form-control" placeholder="Home Address"  value="<?php echo $row['home_address']; ?>" name="home_address"> </div>
                                </div>
                                    <div class="form-group text-center m-t-20">
                                    <div class="form-group">
                            <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="update">Update Profile</button>
                        </div>
                            </div>
                            </form>
                            
                    </div>
                        </div>  
                    </div>
                </div>

                    
                </div>


<?php
include("includes/db.php");
if (isset($_POST['update'])) {
    $surname=mysqli_escape_string($mysqli, $_POST['surname']);
    $firstname=mysqli_escape_string($mysqli, $_POST['firstname']);
    $middlename=mysqli_escape_string($mysqli, $_POST['middlename']);
    $phone_number=mysqli_escape_string($mysqli, $_POST['phone_number']);
    $home_address=mysqli_escape_string($mysqli, $_POST['home_address']);
    $state_of_origin=mysqli_escape_string($mysqli, $_POST['state_of_origin']);
    $marital_status=mysqli_escape_string($mysqli, $_POST['marital_status']);
    $bio=mysqli_escape_string($mysqli, $_POST['bio']);
    $dob=mysqli_escape_string($mysqli, $_POST['dob']);
    $gender=mysqli_escape_string($mysqli, $_POST['gender']);
    $lga=mysqli_escape_string($mysqli, $_POST['lga']);
    $home_town=mysqli_escape_string($mysqli, $_POST['home_town']);
      $ward=mysqli_escape_string($mysqli, $_POST['ward']);
    $session_username= $_SESSION['email'];


   
    $sql=("UPDATE  tbl_users SET surname='$surname', firstname= '$firstname', middlename='$middlename', dob='$dob',lga='$lga',marital_status='$marital_status',gender='$gender', state_of_origin='$state_of_origin', phone_number='$phone_number',home_address='$home_address',ward='$ward',home_town='$home_town',bio='$bio' WHERE email='$session_name' ");
    $result = mysqli_query($mysqli, $sql);

    if($result == TRUE){
            $message = "Update was successfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location: upload_picture.php");
       
      
      
        } else{
            echo "An Error occurred";
            echo $session_name;
           
        }

}


?>
     
                
                <!-- ===== Right-Sidebar ===== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="hidden-xs">
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-danger">
                                        <input id="headcheck" type="checkbox" class="fxhdr">
                                        <label for="headcheck"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="sidecheck" type="checkbox" class="fxsdr">
                                        <label for="sidecheck"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                <li class="db"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- /.container-fluid -->
            <?php include("includes/footer.php")  ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="../plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="js/jquery.slimscroll.js"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="js/waves.js"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="js/custom.js"></script>
    <!-- ===== Plugin JS ===== -->
    <!-- ===== Style Switcher JS ===== -->
    <script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
