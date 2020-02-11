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
  <a href="organizers.php" class="w3-bar-item w3-button links"><i class="fas fa-users-cog"></i> Organizers</a>
  <a href="transactions.php" class="w3-bar-item w3-button links"><i class="fas fa-cogs"></i> Transactions</a>
  <a href="rates.php" class="w3-bar-item w3-button links"><i class="fas fa-star"></i> Rates & Reviews</a>
  <a href="requests.php" class="w3-bar-item w3-button links"><i class="fas fa-exclamation-circle"></i> Approval Requests</a>
  <a href="#" class="w3-bar-item w3-button links w3-text-red w3-hover-red">Logout</a>
</div>

<div id="main">

<div class="w3-teal head-nav">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h5 class="head-nav1">Admin Dashboard</h5>
  </div>
</div>
<div class="w3-container w3-padding-64 w3-animate-zoom">
    <div class="w3-row">
        <a href="#">
            <div class="w3-col s4">
                <div class="w3-center w3-card-4 card-content" style="width:350px; margin: auto;">
                    <div class="w3-padding-32"><i class="fas fa-tasks fa-3x"></i></div>
                    <h4 class="sub">65 Requests</h4>
                    <hr style="padding: 0; margin:0;">
                    <footer class="w3-container">
                      <p><span class="w3-badge w3-red">8</span> &nbsp; New Requests</p>
                    </footer>
                </div>
            </div>
        </a>
        <a href="#">
        <div class="w3-col s4">
            <div class="w3-center w3-card-4 card-content" style="width:350px; margin: auto;">
                <div class="w3-padding-32"><i class="fas fa-users fa-3x"></i></div>
                <h4 class="sub">100 Registered Users</h4>
                <hr style="padding: 0; margin:0;">
                <footer class="w3-container">
                  <p><span class="w3-badge w3-red">2</span> &nbsp; New Users</p>
                </footer>
            </div>
        </div>
        </a>
        <a href="#">
        <div class="w3-col s4">
            <div class="w3-center w3-card-4 card-content" style="width:350px; margin: auto;">
                <div class="w3-padding-32"><i class="fas fa-sync fa-3x"></i></div>
                <h4 class="sub">
                <?php require '../model/Booking.php';
                $objBooking = new Booking();
                $total = $objBooking->Count();
                echo $total;
                ?> 
                On Going Transactions</h4>
                <hr style="padding: 0; margin:0;">
                <footer class="w3-container">
                  <p><span class="w3-badge w3-red">1</span> &nbsp; Finished Transaction</p>
                </footer>
            </div>
        </div>
        </a>
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
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>
<script src="https://kit.fontawesome.com/a98f6ea6d0.js" crossorigin="anonymous"></script>
</body>
</html>
