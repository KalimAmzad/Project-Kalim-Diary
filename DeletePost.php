<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_POST["Submit"])){
$Title=mysql_real_escape_string($_POST["Title"]);
$catagory=mysql_real_escape_string($_POST["catagory"]);
$Post=mysql_real_escape_string($_POST["Post"]);
date_default_timezone_set("Asia/dhaka");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin="Kalim Amzad";
$Image=$_FILES["Image"]["name"];
$Target="Upload/".basename($_FILES["Image"]["name"]);

	global $ConnectingDB;
	$DeleteFromURL=$_GET['Delete'];
	$Query="DELETE FROM admin_panel WHERE id='$DeleteFromURL'";
	
	$Execute=mysql_query($Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	if($Execute){
	$_SESSION["SuccessMessage"]="Post Deleted Successfully";
	Redirect_to("Dashboard.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	Redirect_to("Dashboard.php");
		
	}
	
	
	
}

?>

<!DOCTYPE>

<html>
	<head>
		<title>Delete Post</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" href="css/adminstyles.css">
<style>
	.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
}

</style>
                
	</head>
	<body>
		<header>
			<a class="logo" href="Blog.php"><span>My Diary</span></a>
			<nav >
					<ul>
						<li class="active"><a href="Blog.php">Home</a></li>
						<li><a href="#"" aria-haspopup="true">Programming</a>
							<ul>
								<li><a href="Blog.php?catagory=C">C</a></li>
								<li><a href="Blog.php?catagory=C++">C++</a></li>
								<li><a href="Blog.php?catagory=JAVA">JAVA</a></li>
								<li><a href="Blog.php?catagory=Python">Python</a></li>
								<li><a href="Blog.php?catagory=Matlab">Matlab</a></li>
								<li><a href="Blog.php?catagory=R">R</a></li>
								<li><a href="Blog.php?catagory=PHP">PHP</a></li>
							</ul>
						</li>
						
						<li><a href="#" aria-haspopup="true">Data Structure</a>
							<ul>
								<li><a href="#">Basic</a>
								<ul>
										<li><a href="Blog.php?catagory=Array">Array</a></li>
										<li><a href="Blog.php?catagory=Stack">Stack</a></li>
										<li><a href="Blog.php?catagory=Queue">Queue</a></li>
										<li><a href="Blog.php?catagory=Linked List">Linked List</a></li>
										<li><a href="Blog.php?catagory=Tree">Tree</a></li>
										<li><a href="Blog.php?catagory=Heap">Heap</a></li>
										<li><a href="Blog.php?catagory=Graph">Graph</a></li>
								</ul>
								</li>
								<li><a href="#">Advanced</a>
									<ul>
										<li><a href="Blog.php?catagory=RMQ">RMQ</a></li>
										<li><a href="Blog.php?catagory=Trie">Trie</a></li>
										<li><a href="Blog.php?catagory=BIT">BIT</a></li>
										<li><a href="Blog.php?catagory=Suffix Array">Suffix Array</a></li>
										<li><a href="Blog.php?catagory=AVL Tree">AVL Tree</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="#"" aria-haspopup="true">Algorithm</a>
							<ul>
								<li><a href="Blog.php?catagory=Searching">Searching</a></li>
								<li><a href="Blog.php?catagory=Sorting">Sorting</a></li>
								<li><a href="#">Graph</a>
									<ul>
										<li><a href="Blog.php?catagory= BFS & DFS">BFS & DFS</a></li>
										<li><a href="Blog.php?catagory=SSSP">SSSP</a></li>
										<li><a href="Blog.php?catagory=ASSP">ASSP</a></li>
										<li><a href="Blog.php?catagory=MST">MST</a></li>
										<li><a href="Blog.php?catagory=Max Flow">Max Flow</a></li>
									</ul>

								</li>
								<li><a href="Blog.php?catagory=Divide & Conqure">Divide & Conqure</a></li>
								<li><a href="Blog.php?catagory=Greedy">Greedy</a></li>
								<li><a href="Blog.php?catagory=Dynamic Programming">Dynamic Programming</a></li>
								<li><a href="Blog.php?catagory=Backtracking">Backtracking</a></li>
							</ul>
						</li>

						<li><a href="#"" aria-haspopup="true">Others</a>
							<ul>
								<li><a href="Blog.php?catagory=Arduino">Arduino</a></li>
								<li><a href="Blog.php?catagory=Raspberry pi">Raspberry pi</a></li>
								<li><a href="Blog.php?catagory=MySQL">MySQL</a></li>
								<li><a href="Blog.php?catagory=Bigdata">Big Data</a></li>
								<li><a href="#Blog.php?catagory=Data Science">Data Science</a></li>	
							</ul>
						</li>


						<li><a href="#"" aria-haspopup="true">Academic</a>
							<ul>
								<li><a href="Blog.php?catagory=Math">Math</a></li>
								<li><a href="Blog.php?catagory=Statistics">Statistics</a></li>
								<li><a href="Blog.php?catagory=English">English</a></li>
								<li><a href="Blog.php?catagory=DLD">DLD</a></li>
							</ul>
						</li>

						<form action="Blog.php" class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="Search" >
						</div>
		         		<button class="btn btn-default" name="SearchButton">Go</button>
				
					</form>
					</ul>
			</nav>
		</header>
<div class="container-fluid">
<div class="row">
	
	<div class="col-sm-2">
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	<li class="active">
	<a href="Dashboard.php">
	<span class="glyphicon glyphicon-th"></span>
	&nbsp;Dashboard</a></li>
	<li><a href="AddNewPost.php">
	<span class="glyphicon glyphicon-list-alt"></span>
	&nbsp;Add New Post</a></li>
	<li><a href="Catagories.php">
	<span class="glyphicon glyphicon-tags"></span>
	&nbsp;Categories</a></li>
	<li><a href="Admins.php">
	<span class="glyphicon glyphicon-user"></span>
	&nbsp;Manage Admins</a></li>
	<li><a href="Comments.php">
	<span class="glyphicon glyphicon-comment"></span>
	&nbsp;Comments
<?php
$ConnectingDB;
$QueryTotal="SELECT COUNT(*) FROM comments WHERE status='OFF'";
$ExecuteTotal=mysql_query($QueryTotal);
$RowsTotal=mysql_fetch_array($ExecuteTotal);
$Total=array_shift($RowsTotal);
if($Total>0){
?>
<span class="label pull-right label-warning">
<?php echo $Total;?>
</span>
		
<?php } ?>
	</a>	
	</li>
	<li><a href="Blog.php?Page=1" target="_Blank">
	<span class="glyphicon glyphicon-equalizer"></span>
	&nbsp;Live Blog</a></li>
	<li><a href="Logout.php">
	<span class="glyphicon glyphicon-log-out"></span>
	&nbsp;Logout</a></li>	
		
	</ul>
	
	
	
	
	</div> <!-- Ending of Side area -->
	<div class="col-sm-10">
	<h1>Delete Post</h1>
	<?php echo Message();
	      echo SuccessMessage();
	?>
<div>
	<?php
	$SerachQueryParameter=$_GET['Delete'];
	$ConnectingDB;
	$Query="SELECT * FROM admin_panel WHERE id='$SerachQueryParameter'";
	$ExecuteQuery=mysql_query($Query);
	while($DataRows=mysql_fetch_array($ExecuteQuery)){
		$TitleToBeUpdated=$DataRows['title'];
		$CategoryToBeUpdated=$DataRows['catagory'];
		$ImageToBeUpdated=$DataRows['image'];
		$PostToBeUpdated=$DataRows['post'];
		
	}
	
	
	?>
<form action="DeletePost.php?Delete=<?php echo $SerachQueryParameter; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
	<div class="form-group">
	<label for="title"><span class="FieldInfo">Title:</span></label>
	<input disabled value="<?php echo $TitleToBeUpdated; ?>" class="form-control" type="text" name="Title" id="title" placeholder="Title">
	</div>
	<div class="form-group">
	<span class="FieldInfo"> Existing catagory: </span>
	<?php echo $CategoryToBeUpdated;?>
	<br>
	<label for="categoryselect"><span class="FieldInfo">catagory:</span></label>
	<select disabled class="form-control" id="categoryselect" name="catagory" >
	<?php
global $ConnectingDB;
$ViewQuery="SELECT * FROM catagory ORDER BY datetime desc";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows["id"];
	$CategoryName=$DataRows["name"];
?>	
	<option><?php echo $CategoryName; ?></option>
	<?php } ?>
			
	</select>
	</div>
	<div class="form-group">
		<span class="FieldInfo"> Existing Image: </span>
	<img src="Upload/<?php echo $ImageToBeUpdated;?>" width=170px; height=70px;>
	<br>
	<label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
	<input disabled type="File" class="form-control" name="Image" id="imageselect">
	</div>
	<div class="form-group">
	<label for="postarea"><span class="FieldInfo">Post:</span></label>
	<textarea disabled class="form-control" name="Post" id="postarea">
		<?php echo $PostToBeUpdated; ?>
	</textarea>
	<br>
<input class="btn btn-danger btn-block" type="Submit" name="Submit" value="Delete Post">
	</fieldset>
	<br>
</form>
</div>



	</div> <!-- Ending of Main Area-->
	
</div> <!-- Ending of Row-->
	
</div> <!-- Ending of Container-->
<div id="Footer">
		<hr>
		<p>Theme By | Kalim Amzad | &copy;2017-2020 --- All right reserved.
		</p>
		<hr>
	</div>
<div style="height: 10px; background: #27AAE1;"></div> 

	    
	</body>
</html>