<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("Include/DB.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_GET["id"])){
    $IdFromURL=$_GET["id"];
    $ConnectingDB;
$Query="DELETE FROM catagory WHERE id='$IdFromURL' ";
$Execute=mysql_query($Query);
if($Execute){
	$_SESSION["SuccessMessage"]="Category Deleted Successfully";
	Redirect_to("catagories.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	Redirect_to("catagories.php");
		
	}
    
    
    
    
    
}

?>