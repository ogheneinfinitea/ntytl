


<aside class="sidebar" role="navigation">





            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">





                        <?php
// Include the database configuration file
include ("includes/db.php");
$session_name=$_SESSION['email'];

// Get images from the database
$query = $mysqli->query("SELECT * FROM images WHERE email='$session_name' ORDER BY uploaded_on DESC LIMIT 1 ");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'passport/'.$row["file_name"];
?>
   


                            <img src="<?php echo $imageURL; ?>" alt="image" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>

                            <?php }
}else{ ?>
    <p>Upload Profile Photo</p>
<?php } ?>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                        <?php 
                            include("includes/db.php");
                              // }
                              $session_username= $_SESSION['email'];
                            //   echo $session_username; 
                              $sql="SELECT id,surname FROM tbl_users WHERE email ='$session_username'";
                               
                                $result=$mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    $row = $result->fetch_assoc();
                                        
                                    

                            
                                }
                              
                            ?>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> <?php echo $row['surname']; ?></a></p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="waves-effect" href="dashboard.php" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard <span class="label label-rounded label-info pull-right"></span></span></a>
                            
                        <li>
                            <a class="waves-effect" href="profile.php" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> Update Profile </span></a>
                           
                        </li>
                        <li>
                            <a class="waves-effect" href="upload_picture.php" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Upload Picture <span class="label label-rounded label-primary pull-right"></span></span></a>
                            
                        </li>
                        <li>
                            <a class="waves-effect" href="upload_letter.php" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Upload Letter <span class="label label-rounded label-primary pull-right"></span></span></a>
                            
                        </li>
                        <!-- <li>
                            <a class="waves-effect" href="change_password.php" aria-expanded="false"><i class="icon-equalizer fa-fw"></i> <span class="hide-menu"> Change Password<span class="label label-rounded label-danger pull-right"></span></span></a>
                            
                        </li> -->
                        <li>
                            <a class="waves-effect" href="logout.php" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Logout </span></a>
                            
                        </li>
                        
                       
                    </ul>
                </nav>
                
            </div>
        </aside>