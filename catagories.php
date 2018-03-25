<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php 
if(isset($_POST["Submit"]))
{
$Catagory = mysql_real_escape_string($_POST["Catagory"]);
date_default_timezone_set("Asia/dhaka");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S %A",$CurrentTime);
$DateTime;
$Admin = $_SESSION["Username"];
if(empty($Catagory))
{
$_SESSION["ErrorMessage"] = "All Fields must be filled out";
Redirect_to("Catagories.php");
}

elseif(strlen($Catagory)>99)
{
	$_SESSION["ErrorMessage"] = "Too long name for Catagory";
	Redirect_to("Catagories.php");
}
else
{
global $ConnectingDB;
$Query = "INSERT INTO catagory(datetime,name,creatorname)
VALUES('$DateTime','$Catagory','$Admin')";
$Execute = mysql_query($Query);
if($Execute)
{
$_SESSION["SuccessMessage"] = "Catagory Added Successfully";
Redirect_to("Catagories.php");
}
else{
	$_SESSION["ErrorMessage"] = "Catagory fails to Add";
	Redirect_to("Catagories.php");
	
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Catagories</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/adminstyles.css">
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
	<li >
	<a href="Dashboard.php">
	<span class="glyphicon glyphicon-th"></span>
	&nbsp;Dashboard</a></li>
	<li><a href="AddNewPost.php">
	<span class="glyphicon glyphicon-list-alt"></span>
	&nbsp;Add New Post</a></li>
	<li class="active"><a href="Catagories.php">
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
				<h1>Manage Ctagories</h1>
				<div><?php echo Message();
			echo SuccessMessage();
			?></div>
				<div>
					<form action="Catagories.php" method="POST">
						<fieldset>
							<div class="form-group">
							<label for="catagoryname"><span class="FieldInfo" >Name:</span></label>
							<input class="form-control" type="text" name="Catagory" id="catagoryname" placeholder="Name">
							</div>
							<br>
							<input class="btn btn-success btn-block" type="submit" name="Submit" value="Add New Catagory">
							<br>
						</fieldset>
						
					</form>
				</div>

				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>Sr No.</th>
							<th>Date  Time</th>
							<th>Catagory Name</th>
							<th>Creator Name</th>
							<th>Action</th>
						</tr>
						<?php 
							global $ConnectingDB;
							$ViewQuery = "Select * FROM catagory ORDER BY datetime desc";
							$Execute = mysql_query($ViewQuery);
							$SrNo = 0;
							while($DataRows = mysql_fetch_array($Execute))
							{
								$Id = $DataRows["id"];
								$DateTime = $DataRows["datetime"];
								$CatagoryName = $DataRows["name"];
								$CreatorName = $DataRows["creatorname"];
								$SrNo++;
							
						?>

						<tr>
							<td><?php echo $SrNo."." ?></td>
							<td><?php echo $DateTime ?></td>
							<td><?php echo $CatagoryName ?></td>
							<td><?php echo $CreatorName ?></td>
							<td><a href="DeleteCategory.php?id=<?php echo $Id;?>"><span class="btn btn-danger">Delete</span></a></td>
						</tr>

						<?php } ?>
					</table>
				</div>
				
			</div><!-- ending of main area-->
		</div><!-- ending of row -->
	</div> <!-- ending of container fluid-->

	<div id="Footer">
		<hr>
		<p>Theme By | Kalim Amzad | &copy;2017-2020 --- All right reserved.
		</p>
		<hr>
	</div>
	
	<div style="height: 10px; background: #27AAE1;"></div> 

</body>
</html>