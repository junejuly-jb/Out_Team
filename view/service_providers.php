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
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card w3-animate-left" style="width:250px">
  <h3 class="w3-bar-item">Service Providers</h3>
  <button class="w3-bar-item w3-button tablink w3-active" onclick="openCity(event, 'London')">Venue</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Paris')">Transportation</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Tokyo')">Food</button>
</div>

<div style="margin-left:260px">
  <div id="London" class="w3-container w3-animate-left city">
    <h2>Venue</h2>
    <table class="w3-table w3-striped">
      <tr>
        <td>Provider Name</td>
        <td>Provider Address</td>
        <td>Provider Contact</td>
        <td>Booking Rate</td>
      </tr>
      <?php
        require '../model/Services.php';
        $objServices = new Services();
        $result = $objServices->viewVenue();
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
            echo "<td>".$data['provider_name']."</td>";
            echo "<td>".$data['provider_address']."</td>";
            echo "<td>".$data['provider_contact']."</td>";
            echo "<td>".$data['booking_rate']."</td>";
            echo "<td><a href='venue.php?provider_id=".$data['provider_id']."' class='w3-button w3-blue'>View</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>
  <div id="Paris" class="w3-container w3-animate-left city" style="display:none">
    <h2>Transportation</h2>
    <table class="w3-table w3-striped">
      <tr>
        <td>Provider Name</td>
        <td>Provider Address</td>
        <td>Provider Contact</td>
        <td>Booking Rate</td>
      </tr>
      <?php
        $objServices = new Services();
        $result = $objServices->viewTransportation();
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
            echo "<td>".$data['provider_name']."</td>";
            echo "<td>".$data['provider_address']."</td>";
            echo "<td>".$data['provider_contact']."</td>";
            echo "<td>".$data['booking_rate']."</td>";
            echo "<td><a href='transportation.php?provider_id=".$data['provider_id']."' class='w3-button w3-blue'>View</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>

  <div id="Tokyo" class="w3-container w3-animate-left city" style="display:none">
    <h2>Food</h2>
    <table class="w3-table w3-striped">
      <tr>
        <td>Provider Name</td>
        <td>Provider Address</td>
        <td>Provider Contact</td>
        <td>Booking Rate</td>
      </tr>
      <?php
        $objServices = new Services();
        $result = $objServices->viewFood();
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
            echo "<td>".$data['provider_name']."</td>";
            echo "<td>".$data['provider_address']."</td>";
            echo "<td>".$data['provider_contact']."</td>";
            echo "<td>".$data['booking_rate']."</td>";
            echo "<td><a href='food.php?provider_id=".$data['provider_id']."' class='w3-button w3-blue'>View</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </div>

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
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
<script src="https://kit.fontawesome.com/a98f6ea6d0.js" crossorigin="anonymous"></script>
</body>
</html>
