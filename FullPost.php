<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if(isset($_POST["Submit"])){
$Name=mysql_real_escape_string($_POST["Name"]);
$Email=mysql_real_escape_string($_POST["Email"]);
$Comment=mysql_real_escape_string($_POST["Comment"]);
date_default_timezone_set("Asia/dhaka");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$PostId=$_GET["id"];

if(empty($Name)||empty($Email) ||empty($Comment)){
	$_SESSION["ErrorMessage"]="All Fields are required";
	
}elseif(strlen($Comment)>500){
	$_SESSION["ErrorMessage"]="only 500  Characters are Allowed in Comment";
	
}else{
	global $ConnectingDB;
	$PostIDFromURL=$_GET['id'];
        $Query="INSERT into comments (datetime,name,email,comment,approvedby,status,admin_panel_id)
	VALUES ('$DateTime','$Name','$Email','$Comment','Pending','OFF','$PostIDFromURL')";
	$Execute=mysql_query($Query);
	if($Execute){
	$_SESSION["SuccessMessage"]="Comment Submitted Successfully";
	Redirect_to("FullPost.php?id={$PostId}");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	Redirect_to("FullPost.php?id={$PostId}");
		
	}
	
}	
	
}

?>
<!DOCTYPE>

<html>
	<head>
		<title>Full Blog Post</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
				<link rel="stylesheet" type="text/css" href="css/menu.css">
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="css/publicstyles.css">
               <style>
		

.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
}
.CommentBlock{
background-color:#F6F7F9;
}
.Comment-info{
	color: #365899;
	font-family: sans-serif;
	font-size: 1.1em;
	font-weight: bold;
	padding-top: 10px;
        
	
}
.comment{
    margin-top:-2px;
    padding-bottom: 10px;
    font-size: 1.1em
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
		<div class="container"> <!--Container-->
	<div class="blog-header">
	<h1>The Diary of Kalim  </h1>
	<div style="width: 30%" class="w3-panel w3-leftbar w3-light-grey">
	<p  class="w3-xlarge w3-serif lead"><i>"To be enrich, enrich others"</i></p>
	</div>
	</div>
	<div class="row"> <!--Row-->
		<div class="col-sm-8"> <!--Main Blog Area-->
		<?php echo Message();
	      echo SuccessMessage();
	?>
		<?php
		global $ConnectingDB;
		if(isset($_GET["SearchButton"])){
			$Search=$_GET["Search"];
		$ViewQuery="SELECT * FROM admin_panel
		WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%'
		OR catagory LIKE '%$Search%' OR post LIKE '%$Search%'";
		}else{
			$PostIDFromURL=$_GET["id"];
		$ViewQuery="SELECT * FROM admin_panel WHERE id='$PostIDFromURL'
		ORDER BY datetime desc";}
		$Execute=mysql_query($ViewQuery);
		while($DataRows=mysql_fetch_array($Execute)){
			$PostId=$DataRows["id"];
			$DateTime=$DataRows["datetime"];
			$Title=$DataRows["title"];
			$catagory=$DataRows["catagory"];
			$Admin=$DataRows["author"];
			$Image=$DataRows["image"];
			$Post=$DataRows["post"];
		
		?>
		<div class="blogpost thumbnail">
			<img class="img-responsive img-rounded"src="Upload/<?php echo $Image;  ?>" >
		<div class="caption">
			<h1 id="heading"> <?php echo htmlentities($Title); ?></h1>
		<p class="description">catagory:<?php echo htmlentities($catagory); ?> Published on
		<?php echo htmlentities($DateTime);?></p>
		<p class="post"><?php
		echo nl2br($Post); ?></p>
		</div>
			
		</div>
		<?php } ?>
		<br><br>
		<br><br>
		<span class="FieldInfo">Comments</span>
<?php
$ConnectingDB;
$PostIdForComments=$_GET["id"];
$ExtractingCommentsQuery="SELECT * FROM comments
WHERE admin_panel_id='$PostIdForComments' AND status='ON' ";
$Execute=mysql_query($ExtractingCommentsQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$CommentDate=$DataRows["datetime"];
	$CommenterName=$DataRows["name"];
	$Comments=$DataRows["comment"];


?>
<div class="CommentBlock">
	<img style="margin-left: 10px; margin-top: 10px;" class="pull-left" src="images/comment.png" width=70px; height=70px;>
	<p style="margin-left: 90px;" class="Comment-info"><?php echo $CommenterName; ?></p>
	<p style="margin-left: 90px;"class="description"><?php echo $CommentDate; ?></p>
	<p style="margin-left: 90px;" class="Comment"><?php echo nl2br($Comments); ?></p>
	
</div>

	<hr>
<?php } ?>
		
		
		<br>
		<span class="FieldInfo">Share your thoughts about this post</span>
		
		
<div>
<form action="FullPost.php?id=<?php echo $PostId; ?>" method="post" enctype="multipart/form-data">
	<fieldset>
	<div class="form-group">
	<label for="Name"><span class="FieldInfo">Name</span></label>
	<input class="form-control" type="text" name="Name" id="Name" placeholder="Name">
	</div>
	<div class="form-group">
	<label for="Email"><span class="FieldInfo">Email</span></label>
	<input class="form-control" type="email" name="Email" id="Email" placeholder="email">
	</div>
	<div class="form-group">
	<label for="commentarea"><span class="FieldInfo">Comment</span></label>
	<textarea class="form-control" name="Comment" id="commentarea"></textarea>
	<br>
<input class="btn btn-primary" type="Submit" name="Submit" value="Submit">
	</fieldset>
	<br>
</form>
</div>

		</div> <!--Main Blog Area Ending-->
		<div class="col-sm-offset-1 col-sm-3"> <!--Side Area -->
			<h2 align="center">About me </h2>
	<img class=" img-responsive img-circle imageicon" src="images/me.jpg">		
		<p align="justify">
			I'm Kalim Amzad, student of Knowledge. Seek pleasure of my Creator Allah (swt). Curious to know new technology.
			I also want to share my thought, my little knowledge with everyone to enrich my knowledge. 
			If anyone is helped by this blog then i think myself that i'm successful. Also don't forget to share 
			my blog, youtube channel with your friends. Also Don't forget me in your prayer.
		</p>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Categories</h2>
	</div>
	<div class="panel-body">
<?php
global $ConnectingDB;
$ViewQuery="SELECT * FROM catagory ORDER BY id desc";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows['id'];
	$catagory=$DataRows['name'];
?>
<a href="Blog.php?catagory=<?php echo $catagory; ?>">
<span id="heading"><?php echo $catagory."<br>"; ?></span>
</a>
<?php } ?>
		
	</div>
	<div class="panel-footer">
		
		
	</div>
</div>




<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Recent Posts</h2>
	</div>
	<div class="panel-body background">
<?php
$ConnectingDB;
$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,5";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute)){
	$Id=$DataRows["id"];
	$Title=$DataRows["title"];
	$DateTime=$DataRows["datetime"];
	$Image=$DataRows["image"];
	if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,12);}
	?>
<div>
<img class="pull-left" style="margin-top: 10px; margin-left: 0px;"  src="Upload/<?php echo htmlentities($Image); ?>" width=120; height=60;>
    <a href="FullPost.php?id=<?php echo $Id;?>">
     <p id="heading" style="margin-left: 130px; padding-top: 10px;"><?php echo htmlentities($Title); ?></p>
     </a>
     <p class="description" style="margin-left: 130px;"><?php echo htmlentities($DateTime);?></p>
	<hr>
</div>	
	
	
	
<?php } ?>		
		
	</div>
	<div class="panel-footer">
		
		
	</div>
</div>
		
		
		
		
		</div> <!--Side Area Ending-->
	</div> <!--Row Ending-->

	<div id="Footer">
		<hr>
		<p>Theme By | Kalim Amzad | &copy;2017-2020 --- All right reserved.
		</p>
		<hr>
	</div>
	
	<div style="height: 10px; background: #27AAE1;"></div> 
</body>
</html>