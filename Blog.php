<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/publicstyles.css">
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
	<!--<p class="lead">The Complete blog using PHP by Jazeb Akram</p>-->
	</div>
	<div class="row"> <!--Row-->
		<div class="col-sm-8"> <!--Main Blog Area-->
					<?php
					global $ConnectingDB;
					// Query when Search Button is Active
					if(isset($_GET["SearchButton"])){
						$Search=$_GET["Search"];
						
					$ViewQuery="SELECT * FROM admin_panel
					WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%'
					OR catagory LIKE '%$Search%' OR post LIKE '%$Search%' ORDER BY id desc";
					}
					// QUery When catagory is active URL Tab
					elseif(isset($_GET["catagory"])){
					$catagory=$_GET["catagory"];
				$ViewQuery="SELECT * FROM admin_panel WHERE catagory='$catagory' ORDER BY id desc";	
					}
					// Query When Pagination is Active i.e Blog.php?Page=1
					elseif(isset($_GET["Page"])){
					$Page=$_GET["Page"];
					if($Page==0||$Page<1){
						$ShowPostFrom=0;
					}else{
					$ShowPostFrom=($Page*5)-5;}
				$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT $ShowPostFrom,5";
					}
					// The Default Query for Blog.php Page
					else{
						
					$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,5";}
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
					<?php echo htmlentities($DateTime);?>
			<?php
			$ConnectingDB;
			$QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$PostId' AND status='ON'";
			$ExecuteApproved=mysql_query($QueryApproved);
			$RowsApproved=mysql_fetch_array($ExecuteApproved);
			$TotalApproved=array_shift($RowsApproved);
			if($TotalApproved>0){
			?>
			<span class="badge pull-right">
			Comments: <?php echo $TotalApproved;?>
			</span>
					
			<?php } ?>
					
					</p>
					<p class="post"><?php
					if(strlen($Post)>150){$Post=substr($Post,0,150).'...';}
					
					echo $Post; ?></p>
					</div>
					<a href="FullPost.php?id=<?php echo $PostId; ?>"><span class="btn btn-info">
						Read More &rsaquo;&rsaquo;
					</span></a>
						
					</div>
					<?php } ?>
					<?php 
					if(isset($_GET["catagory"]) || isset($_GET["SearchButton"]) ){ 

						}
						

						else{ 
							?>
					<nav style="background-color: #ffffff">
						<ul class="pagination pull-left pagination-lg">
				<!-- Creating backward Button -->
				<?php
				if(isset($Page))
				{
				       if($Page>1){
					?>
					<li><a href="Blog.php?Page=<?php echo $Page-1; ?>"> &laquo; </a></li>
			         <?php        }
				} ?>			
					<?php
					global $ConnectingDB;
					$QueryPagination="SELECT COUNT(*) FROM admin_panel";
					$ExecutePagination=mysql_query($QueryPagination);
					$RowPagination=mysql_fetch_array($ExecutePagination);
					  $TotalPosts=array_shift($RowPagination);
					 // echo $TotalPosts;
					  $PostPagination=$TotalPosts/5;
					  $PostPagination=ceil($PostPagination);
					 // echo $PostPerPage;
					
					for($i=1;$i<=$PostPagination;$i++){
				if(isset($Page)){
					if($i==$Page){
					?>
					<li class="active"><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

					<?php
					} else{ ?>
					<li><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>	
					<?php
					}

				}
					else{ ?>
					<li><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>	
					<?php
					}
				
					} ?>
					<!-- Creating Forward Button -->
					<?php
				if(isset($Page))
				{
				       if($Page+1<=$PostPagination){
					?>
					<li><a href="Blog.php?Page=<?php echo $Page+1; ?>"> &raquo; </a></li>
			         <?php        }
				} ?>	
					</ul>
					</nav>
					<?php } ?>
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