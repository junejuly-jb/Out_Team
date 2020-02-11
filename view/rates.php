<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
    <a href="admindashboard.php" style="text-decoration:none;"><h5 class="head-nav1">Admin Dashboard</h5></a>
  </div>
</div>

<div class="w3-container">
    <div class="w3-container w3-animate-left">
        <h2>Rates & Reviews</h2>
    </div>
    <div class="w3-container w3-animate-left">
        <form action="" class="w3-form" method="POST">
        <input class="w3-input" type="text" name="search_text" id="search_text" placeholder="Search by organizer details"/>
        </form>
        <br>
    </div>
    <div class="w3-container" id="result"></div>
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
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"rates_search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
<script src="https://kit.fontawesome.com/a98f6ea6d0.js" crossorigin="anonymous"></script>
</body>
</html>
