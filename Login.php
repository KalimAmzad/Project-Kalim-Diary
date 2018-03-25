<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if(isset($_POST["Submit"])){
$Username=mysql_real_escape_string($_POST["Username"]);
$Password=mysql_real_escape_string($_POST["Password"]);

if(empty($Username)||empty($Password)){
	$_SESSION["ErrorMessage"]="All Fields must be filled out";
	Redirect_to("Login.php");
	
}
else{
	$Found_Account=Login_Attempt($Username,$Password);
	$_SESSION["User_Id"]=$Found_Account["id"];
	$_SESSION["Username"]=$Found_Account["username"];
	if($Found_Account){
	$_SESSION["SuccessMessage"]="Welcome  {$_SESSION["Username"]} ";
	Redirect_to("Dashboard.php");
		
	}else{
		$_SESSION["ErrorMessage"]="Invalid Username / Password";
	Redirect_to("Login.php");
	}
	
}	
}	


?>

<!DOCTYPE>

<html>
	<head>
		<title>Log-in</title>
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
body{
	background-color: #ffffff;
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
	
	<div class="col-sm-offset-4 col-sm-4">
		
		<?php echo Message();
	      echo SuccessMessage();
	?>
	<h2>Welcome back !</h2>
	
<div>
<form action="Login.php" method="post">
	<fieldset>
	<div class="form-group">
	<label for="Username"><span class="FieldInfo">UserName:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-envelope text-primary"></span>
	</span>
	<input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
	</div>	
	</div>
	
	<div class="form-group">
	<label for="Password"><span class="FieldInfo">Password:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-lock text-primary"></span>
	</span>
	<input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
	</div>
	</div>
	
	<br>
<input class="btn btn-info btn-block" type="Submit" name="Submit" value="Login">
	</fieldset>
	<br>
</form>

	</div> <!-- Ending of Main Area-->
	
</div> <!-- Ending of Row-->
	
</div> <!-- Ending of Container-->

	    
	</body>
</html>