<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>SaveOnBlock</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <!-- Icons -->
	  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="	fas fa-th"></em> SaveOnBlock</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
			<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fas fa-hashtag"></em> Certify <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="verify.php"><em class="fab fa-searchengin"></em> Verify</a></li>
					<li class="nav-item"><a class="nav-link " href="howitworks.php"><em class="fas fa-question-circle"></em> How it works?</a></li>
					<li class="nav-item"><a class="nav-link active" href="about.php"><em class="fas fa-th"></em> About Us</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php"><em class="far fa-envelope"></em> Contact</a></li>

				</ul>

			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<!--<h1 class="float-left text-center text-md-left">Select the blockchain!</h1>-->
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">

						<div class="username mt-1">

							<h6 class="text-muted">PROOF OF EXISTENCE WITH IPFS</h6>
						</div>


					</div>
					<div class="clear"></div>
				</header>

					<section class="section">
				<div class="container  mb-3">
				<h3>About Us</h3>
				<p class="lead">Learn more about SaveOnBlock</p>
				<br>

					<p><strong>SaveOnBlock</strong> allow you to certify your data by using Blockchain and IPFS (InterPlanetary File System).
					SaveOnBlock is a decentralized notary service. The proof of existence of your data is anonymous, private, and stored in a decentralized system that can't be erased or modified by anyone.
				<br>
				<br>To register the unique proof of your document, a transaction is created with the proof attached to it. For now, the fees for the transaction are to be paid in Bitcoin (BTC).
				<br>
				<br>
				Once a transaction has been initiated, the unique IPFS hash is stored securely in the blockchain.
Your document's existence is permanently validated by the blockchain even if this site is compromised or down.
				<br>
				<br>
				<strong>IPFS</strong> is called InterPlanetary File System. It is a peer-to-peer hypermedia protocol
to make the web faster, safer, and more open. IPFS removes duplications across the network and tracks version history for every file.
				</div>





						</section>


					</div>
				</section>
			</main>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
	                responsive: true,
	                scaleLineColor: "rgba(0,0,0,.2)",
	                scaleGridLineColor: "rgba(0,0,0,.05)",
	                scaleFontColor: "#c5c7cc "
	                });
	            };
	        window.setTimeout(startCharts(), 1000);
	</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	</body>
</html>
