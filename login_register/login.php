<?php
session_start();
include("../Config.php"); 

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['user-name']);
  $password = mysqli_real_escape_string($db, $_POST['user-password']);
  
        $password = md5($password);
        // $query = "SELECT * FROM bg_users WHERE username='$username' AND password='$password'";

        $query = "SELECT userid FROM bg_users WHERE username = '$username' and password = '$password'";

        $results = mysqli_query($db, $query);
        
        $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
        $id = $row['userid'];
        
        $count = mysqli_num_rows($results);
        if($count == 1) {
           $_SESSION['username'] = $username;
           $_SESSION['password'] = $password;
           $_SESSION['userid'] = $id;
      //      $_SESSION['prive'] = $row['privilege'];
      //      if($_SESSION['prive'] == 'admin_user'){
      //         $_SESSION['userid'] = 1;
      //      }else{
      //         $_SESSION['userid'] = $row['id'];
      //      }
  
           echo $_SESSION['username']; 

           header('location: ../products.php'); 
        }else {
            echo "<script>alert('User not found'); window.location.href='../index.php';</script>";
     }
 
}

?>
