<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NBA SEATSEEKER</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">NBA SEATSEEKER</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class='nav-link' href='about.php'>About us</a>
                        </div>
                    </div>
                </nav>
            </div>
    <div class="container">
      <div class="row">
        <div class="article">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Schedule</h5>
				<div class="form-signin">
             
					<?php
					include "connect.php";

					$sql = "SELECT * FROM SCHEDULE";
					$result = $link->query($sql);

					if ($result->num_rows > 0) {
            // output data of each row
					  while($row = $result->fetch_assoc()) {
						echo "<hr class='my-4'> <b>Match ID: </b> " . $row["MatchID"]. "<br><b>Teams ID: </b> " . $row["TeamsID"]. "<br><b>Start Time: </b>" . $row["StartTime"]. "<br><b>End Time: </b>" . $row["EndTime"];
					  }
					} else {
					  echo "No result";
					}
					$link->close();
					?>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
	</div>
  </body>
</html>