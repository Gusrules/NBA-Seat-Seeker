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
              <h5 class="card-title text-center">Querries</h5>
                <div class="form-signin">
                    
                  <?php
                  include "connect.php";

                  $sql = "SELECT * FROM Stadium WHERE City = 'MILWAUKEE';";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Εμφάνισε το στάδιο στην πόλη MILWAUKEE</b> <br> <b>Stadium ID: </b> " . $row["StadiumID"]. "<br><b>City: </b> " . $row["City"]. "<br><b>Name: </b> " . $row["Name"]. "<br><b>Number: </b> " . $row["Number"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();          
                  ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT * FROM Customer WHERE age > 22 ORDER BY age;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Δείξε μου τους θεατές που είναι άνω των 22 ετών με αύξουσα σειρά</b> <br> <b>Name: </b> " . $row["FirstName"]. "<br><b>Surname: </b> " . $row["LastName"]. " <br><b>Age: </b> " . $row["Age"]. " <br><b>Number: </b>" . $row["PhoneNumber"]. "<br><b>Customer ID: </b>" . $row["CustomerID"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT COUNT(StadiumID) FROM Stadium;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Δείξε μου πόσα στάδια υπάρχουν</b> <br> <b>Stadium ID: </b> " . $row["StadiumID"]. "<br><b>City: </b> " . $row["City"]. "<br><b>Name: </b> " . $row["Name"]. "<br><b>Number: </b> " . $row["Number"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT AVG(Age) FROM Customer;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Ποιός είναι ο μέσος όρος ηλικίας των θεατών στην βάση δεδομένων ?</b> <br><b>Age: </b> " . $row["Age"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT TeamName FROM Teams GROUP BY TeamName;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Εμφάνισε μου τα ονόματα όλων των ομάδων με αλφαβιτική σειρά</b> <br> <b>Team Name: </b> " . $row["TeamName"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT COUNT(Ticket.DiscountID) 
                  FROM Ticket JOIN Discount 
                  ON Discount.DiscountID = Ticket.DiscountID 
                  JOIN Matches 
                  ON Ticket.MatchID = Matches.MatchID 
                  WHERE Discount.DiscountName = 'PAIDIKO' AND Ticket.MatchID = 2;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Πόσα παιδικά εισιτήρια υπάρχουν για MatchID = 2</b> <br> <b>Ticket ID: </b> " . $row["TicketID"]. "<br><b>Customer ID: </b> " . $row["CustomerID"]. "<br><b>Stadium ID: </b> " . $row["StadiumID"]. "<br><b>Discount ID: </b> " . $row["DiscountID"]. "<br><b>Match ID: </b> " . $row["MatchID"]. "<br><b>Discount ID: </b> " . $row["DiscountID"]. "<br><b>Discount Name: </b> " . $row["DicountName"]. "<br><b>Discount Price: </b>" . $row["DiscountPrice"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT FirstName, LastName, Age FROM Customer GROUP BY LastName, FirstName;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Εμφάνισε μου το όνομα, επίθετο και ηλικία των θεατών εχόντας σε αλφαβιτική σειρά τα επίθετα τους και στην συνέχεια τα ονόματα τους</b> <br> <b>Name: </b> " . $row["FirstName"]. "<br><b>Surname: </b> " . $row["LastName"]. " <br><b>Age: </b> " . $row["Age"]. " <br><b>Number: </b>" . $row["PhoneNumber"]. "<br><b>Customer ID: </b>" . $row["CustomerID"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT Stadium.Name FROM Stadium 
                  JOIN Ticket ON Stadium.StadiumID = Ticket.StadiumID
                  GROUP BY Stadium.Name;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Δείξε μου τα στάδια στα οποιά έχουν κοπεί εισιτήρια με αλφαβιτική σειρά</b> <br> <b>Stadium ID: </b> " . $row["StadiumID"]. "<br><b>City: </b> " . $row["City"]. "<br><b>Name: </b> " . $row["Name"]. "<br><b>Number: </b> " . $row["Number"]. "<br><b>Stadium ID: </b> " . $row["StadiumID"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT Ticket.*, Stadium.Name FROM Ticket 
                  JOIN Stadium 
                  ON ticket.StadiumID = Stadium.StadiumID
                  WHERE Stadium.Name = 'Crypto.comArena';";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Εμφάνισε όλα τα εισιτήρια των αγώνων που θα γίνουν στο στάδιο Crypto.comArena</b> <br> <b>Ticket ID: </b> " . $row["TicketID"]. "<br><b>Customer ID: </b> " . $row["CustomerID"]. "<br><b>Stadium ID: </b> " . $row["StadiumID"]. "<br><b>Discount ID: </b> " . $row["DiscountID"]. "<br><b>Match ID: </b> " . $row["MatchID"]. "<br><b>Stadium ID: </b> " . $row["StadiumID"];
                    }
                  } else {
                    echo "No result";
                  }
                  $link->close();
                ?>
                <div class="form-signin">
                    
                    <?php
                    include "connect.php";
                  
                  $sql = "SELECT * FROM Schedule
                  WHERE StartTime = '18:00'
                  ORDER BY MatchID;";
                  $result = $link->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<hr class='my-4'> <b>Εμφάνισε μου το προγραμμα των αγώνων που ξεκινάνε στις 18:00 με σειρα ID τους</b> <br> <b>Match ID: </b> " . $row["MatchID"]. "<br><b>Teams ID: </b> " . $row["TeamsID"]. "<br><b>Start Time: </b>" . $row["StartTime"]. "<br><b>End Time: </b>" . $row["EndTime"];
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