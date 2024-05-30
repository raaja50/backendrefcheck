<?php 
include("../Config.php");  
// $user_id = $_SESSION['userid'];
 
    $output = '';
    $message = '';
   echo $p_name = mysqli_real_escape_string($db, $_POST["p_name"]);

//     $targetFile = '../uploads/' . basename($_FILES["filezz"]["name"].''.rand());
//    echo $file =  $_FILES["filezz"]["name"];
//     if (move_uploaded_file($_FILES["filezz"]["tmp_name"], $targetFile)) {
//     $message = 'File uploaded successfully';

//     $p_name = mysqli_real_escape_string($db, $_POST["p_name"]);
//     $price = mysqli_real_escape_string($db, $_POST["price"]);
//     $quantity = mysqli_real_escape_string($db, $_POST["quantity"]); 
//     $description = mysqli_real_escape_string($db, $_POST["description"]);
    
//       echo  $query = "INSERT INTO `bg_products`(`name`,`org_pric`,`qty`,`imag`,`smal_desc`,`created_at`) Value ('$p_name','$price','$quantity','$file','$description',CURRENT_TIMESTAMP())"; 
//         $message = 'Data Inserted';
//     // }
//     if (mysqli_query($db, $query)) {
//         $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
        
//     } else {
//         $output .= 'Error' . $query;
//     }
//     echo $output;
//     }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['filezz']) && $_FILES['filezz']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['filezz']['tmp_name'];
        $fileName = $_FILES['filezz']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['filezz']['type'];
        $targetFile = './uploads/' . basename($_FILES["filezz"]["name"]);
        if (move_uploaded_file($_FILES["filezz"]["tmp_name"], $targetFile)) {
                $message = 'File uploaded successfully';
            
            }
 
    } else {
        echo 'There is some error in the file upload. Please check the following error.<br>';
        echo 'Error:' . $_FILES['file']['error'];
    }
} else {
    echo 'Invalid request method';
}
 
?>