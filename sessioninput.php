<?php
session_start();
?>

<?php
if ($_SESSION["userid"]) {
?>
    <!-- <input type="hidden"> -->
<?php
}else {
    echo "<h1>Please login first .</h1>";
    header("location: index.php");
}

?>