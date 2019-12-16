<?php 


header('Location: chart.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
	
    </script>

    <!-- <script>
    window.onload = function() {

        // var average = [];
        // var min = [];
        // var max = [];

        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "GRAPH OF YOUR VOLTAGE WATER QUALITY"
            },
            axisY: {
                includeZero: false
            },
            legend: {
                cursor: "pointer",
                itemclick: function(e) {
                    //console.log("legend click: " + e.dataPointIndex);
                    //console.log(e);
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }

                    e.chart.render();
                }
            },
            data: [{
                    type: "line",
                    dataPoints: dps,
                    showInLegend: true,
                    legendText: "Realtime Data",

                }, {
                    type: "line",
                    name: "avg",
                    dataPoints: average,
                    showInLegend: true,
                    legendText: "Average",
                },
                {
                    type: "line",
                    name: "min",
                    dataPoints: average,
                    showInLegend: true,
                    legendText: "Min",
                },
                {
                    type: "line",
                    name: "max",
                    dataPoints: average,
                    showInLegend: true,
                    legendText: "Max",
                }
            ]
        });

         // number of dataPoints visible at any point
        var data = document.getElementById("dom-target");

        
    }
    </script> -->
    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Binomo</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.html"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<!-- <li class="nav-item"><a class="nav-link" href="widgets.html"><em class="fa fa-calendar-o"></em> Widgets</a></li>
					<li class="nav-item"><a class="nav-link" href="charts.html"><em class="fa fa-bar-chart"></em> Charts</a></li>
					<li class="nav-item"><a class="nav-link" href="buttons.html"><em class="fa fa-hand-o-up"></em> Buttons</a></li>
					<li class="nav-item"><a class="nav-link" href="forms.html"><em class="fa fa-pencil-square-o"></em> Forms</a></li>
					<li class="nav-item"><a class="nav-link" href="cards.html"><em class="fa fa-clone"></em> Cards</a></li> -->
				</ul>
				<a href="login.html" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">Username</h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								<div class="jumbotron">
									<h1 class="mb-4">Hello, world!</h1>
									<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
									<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
									<p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Learn more</a></p>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Overview</h3>
										<div class="dropdown card-title-btn-container">
											<!-- <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div> -->
										</div>
										<h6 class="card-subtitle mb-2 text-muted">Statistik Data</h6>
										<div class="canvas-wrapper">
											<canvas class="chart" id="line-chart" height="200" width="600"></canvas>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block">
										<div id="calendar"></div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Todo List</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>
										<ul class="todo-list mt-2 mb-2">
											
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck1">
														<label class="custom-control-label custom-control-description" for="customCheck1">Make Coffee</label>
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck2">
														<label class="custom-control-label custom-control-description" for="customCheck2">Check emails</label>
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck3">
														<label class="custom-control-label custom-control-description" for="customCheck3">Reply to Jane</label>
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck4">
														<label class="custom-control-label custom-control-description" for="customCheck4">Work on the new design</label>
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck5">
														<label class="custom-control-label custom-control-description" for="customCheck5">Get feedback</label>
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
										</ul>
										<div class="card-footer todo-list-footer">
											<div class="input-group">
												<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
											</span></div>
										</div>
									</div>
								</div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <!-- <script src="js/chart-data.js"></script> -->
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
		var graphData;
		var dps = []; // dataPoints
		var labelsData = []; // dataPoints
		var xVal = 0;
        var yVal = 0;
        var updateInterval = 1000;
        var dataLength = 10;
		
		$(document).each(function() {
			loadData();
			// loadAverage();
		})

		function loadData() {
			$.get('controller/data.php', function(data) {
				// console.log(data);
				graphData = data;
			});
		}
		
		window.setInterval(loadData, 1000);

		var lineChartData = {
			labels : labelsData,
			datasets : [
				{
					label: "Realtime Data",
					fillColor : "rgba(128,130,228, 0.6)",
					strokeColor : "rgba(128,130,228, 1)",
					highlightFill : "rgba(128,130,228, 0.75)",
					highlightStroke : "rgba(128,130,228, 1)",
					data : dps,
				},
			],
			options : {
				animation: false
			}

		}

	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
						responsive: true,
						scaleLineColor: "rgba(0,0,0,.2)",
						scaleGridLineColor: "rgba(0,0,0,.05)",
						scaleFontColor: "#c5c7cc"
	                });
	            }; 
	        window.setTimeout(startCharts(), 1000);

		var updateChart = function(count) {
			count = count || 1;

			for (var j = 0; j < count; j++) {
				yVal = graphData;
				
				if(yVal == undefined){
					yVal = 0;
				}
				
				dps.push(yVal);
				labelsData.push(xVal);
				
				console.log(dps);
				xVal++;
			}

			if (dps.length > dataLength) {
				dps.shift();
				labelsData.shift();
			}

			startCharts();
		};

		updateChart(dataLength);
		setInterval(function() {
			updateChart()
		}, updateInterval);

		
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	</body>
</html>
