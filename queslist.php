<!DOCTYPE HTML>
<html>
	<head>
		<title>OS Visual Studio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>

	<body class="landing is-preload">
    <?php include 'partials/_dbconnect.php';?>

    <?php
    	$id = $_GET['modid'];
    	$sql = "SELECT * FROM `modules` WHERE module_id=$id"; 
    	$result = mysqli_query($conn, $sql);
    	while($row = mysqli_fetch_assoc($result)){
        	$modname = $row['module_name'];
        	$modesc = $row['module_description'];
    	}
    ?>
    
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html">OS</a> Visual Studio</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#os-algorithms" class="icon solid fa-angle-down">OS Algorithms</a>
								<ul>
									<li>
										<a href="generic.html">CPU Scheduling</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
									<li>
										<a href="contact.html">Page Replacement</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
									<li>
										<a href="elements.html">Disk Scheduling</a>
										<ul>
											<li><a href="#">FCFS Algorithm</a></li>
											<li><a href="#">SSTF Algorithm</a></li>
											<li><a href="#">SCAN Algorithm</a></li>
											<li><a href="#">CSCAN Algorithm</a></li>
											<li><a href="#">LOOK Algorithm</a></li>
											<li><a href="#">CLOOK Algorithm</a></li>
											<li><a href="#">LIFO Algorithm</a></li>
										</ul>
									</li>
									<li>
										<a href="elements.html">Deadlock Avoidance</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
									<li>
										<a href="elements.html">Deadlock Detection</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Memory Allocation</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#main">About</a></li>
							<li><a href="index.html">Tutorial</a></li>
							<li><a href="forum.php">Discussion Forum</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2><?php echo $modname;?></h2>
					<p><?php echo $modesc;?></p>
					<ul class="actions special">
						
					</ul>
				</section>

     			<!-- Main -->	
                      <div class="container">
	                  <div class="firstDiv">
		               <h1><b> Browse Questions</b> </h1>

                      <?php 
							$id = $_GET['modid'];	
							$sql = "SELECT * FROM `questions` WHERE ques_mod_id=$id"; 
							$result = mysqli_query($conn, $sql);

							while($row = mysqli_fetch_assoc($result)){
								$id = $row['ques_id'];
        						$title = $row['ques_title'];
        						$desc = $row['ques_desc'];

								echo '<div class="media">
								<img  class="img" src="images/avtar.jpg"  class="mr-3" alt="..." >
								   <b><a href="thread.php">'. $title . '</a></b> 
								  <div class="mt">
								  <p> '. $desc . ' </p>
								</div>
							  </div>';
							}
					  ?>

					<!-- LEFT HERE JUST FOR REFERENCE OF HTML -->
					   <!-- <div class="media">
						<img  class="img" src="images/avtar.jpg"  class="mr-3" alt="..." >
						   <b>What is CPU Scheduling?</b> 
						  <div class="mt">
						  <p> CPU Scheduling is a process of determining which process will own CPU for execution while another process is on hold.</p>
						</div>
					  </div> -->
                      
	               </div>
                       </div>
					   


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <a href="http://github.com">OS Visual Studio.</a>   All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>