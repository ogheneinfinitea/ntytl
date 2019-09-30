<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>


<?php
// Include the database configuration file
include ("includes/db.php");
$statusMsg = '';
$session_name=$_SESSION['email'];


// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$session_username= $_SESSION['email'];
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
  
    if(in_array($fileType, $allowTypes)){//
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert=$mysqli->query("UPDATE  tbl_users SET file_name='$fileName' WHERE email='$session_name' ");
            $insert = $mysqli->query("INSERT into tbl_letters (file_name, uploaded_on, email) VALUES ('".$fileName."', NOW(),'".$session_username."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                $message = "PHOTO UPLOAD";
           
        echo "<script type='text/javascript'>alert('$message');</script>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>