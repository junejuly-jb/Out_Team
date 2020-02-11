<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-light-gray" style="display:none" id="mySidebar">
<button class="w3-white w3-hover-pale-red w3-bar-item w3-button w3-large w3-right-align w3-padding-large"
  onclick="w3_close()"><span class="w3-text-red">&times;</span></button>
  <div class="img-container">
      <img src="media/admin.png" alt="" width="200px" class="img-admin">
      <h2 class="name">John Lenon</h2>
      <p class="sub-name">admin</p>
  </div>
  <a href="service_providers.php" class="w3-bar-item w3-button links"><i class="far fa-handshake"></i> Service Providers</a>
  <a href="transactions.php" class="w3-bar-item w3-button links"><i class="fas fa-cogs"></i> Transactions</a>
  <a href="requests.php" class="w3-bar-item w3-button links"><i class="fas fa-exclamation-circle"></i> Approval Requests</a>
  <a href="#" class="w3-bar-item w3-button links w3-text-red w3-hover-red">Logout</a>
</div>

<div id="main">

<div class="w3-teal head-nav">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <a href="admindashboard.php" style="text-decoration:none;"><h5 class="head-nav1">Admin Dashboard</h5></a>
  </div>
</div>
<div class="w3-container w3-padding-32 w3-animate-right">
  <a href="service_providers.php"><i class="w3-text-teal fas fa-chevron-circle-left fa-3x"></i></a>
</div>
<div class="w3-container w3-animate-right">
  <table class="w3-table w3-striped">
    <tr>
      <th>Transportation Package</th>
      <th>Details</th>
      <th>Vehicle Type</th>
      <th>Driver</th>
      <th>Number of Seats</th>
      <th>Transportation Rate</th>
    </tr>
    <?php
      if(isset($_GET['provider_id'])){
        $provider_id = $_GET['provider_id'];
        require '../model/Transport.php';
        $objTransport = new Transport();
        $result = $objTransport->view($provider_id);
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
            echo "<td>".$data['transportation_package']."</td>";
            echo "<td>".$data['transportation_details']."</td>";
            echo "<td>".$data['transportation_type']."</td>";
            echo "<td>".$data['driver']."</td>";
            echo "<td>".$data['no_seats']."</td>";
            echo "<td>".$data['transportation_rate']."</td>";
          echo "</tr>";
          }
        }
    ?>
  </table>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<script src="https://kit.fontawesome.com/a98f6ea6d0.js" crossorigin="anonymous"></script>
</body>
</html>
