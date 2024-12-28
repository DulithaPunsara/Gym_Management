<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/dashboard.css">
  <!-- <link rel="stylesheet" href="css/chart.css"> -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include 'sidebar.php'?>

<section class="home-section" id="home-section">  
  <div class="cardbox">

    <div class="card">
      <div>
        <div class="numbers">
          <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM register";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Registrations</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-eye" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM member";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Members</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-users" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM staff";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Staff Members</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-briefcase" aria-hidden="true"></i>
      
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM staff where designation='cleaning'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Cleaning Staff</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-home" aria-hidden="true"></i>
       
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM staff where designation='cashier'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Cashier</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-money" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM staff where designation='Trainer'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Trainer</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Connection Failed");
            }
            $sql = "SELECT * FROM staff where designation='Trainer'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total Amount</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  
    
    

<?php 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gym";
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
  
  $query = $con->query("
    SELECT 
      services as services,
        SUM(amount) as amount
    FROM member
    GROUP BY services
  ");

  foreach($query as $data)
  {
    $services[] = $data['services'];
    $amount[] = $data['amount'];
  }

?>


</section>
<script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
      
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                    document.location.href = newURL;
                }
            }
        }
        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>  
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
</body>
</html>