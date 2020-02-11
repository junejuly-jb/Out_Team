<?php
$connect = mysqli_connect("localhost", "root", "", "out_team");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
    SELECT * FROM booking join organizer on booking.organizer_id = organizer.organizer_id 
    join transportation on booking.transportation_id = transportation.transportation_id 
    join food on booking.food_id = food.food_id join venue on booking.venue_id = venue.venue_id
	WHERE organizer.organizer_fname LIKE '%".$search."%'
	OR organizer.organizer_lname LIKE '%".$search."%'";
}
else
{
	$query = "
    SELECT * FROM booking join organizer on
    booking.organizer_id = organizer.organizer_id 
    join transportation on booking.transportation_id = transportation.transportation_id 
    join food on booking.food_id = food.food_id join venue on booking.venue_id = venue.venue_id
    ORDER BY book_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<table class="w3-table w3-striped w3-animate-left">
						<tr>
                            <th>Name</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Food</th>
                            <th>Transportation</th>
                            <th>Venue</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["organizer_fname"].' '.$row["organizer_lname"].'</td>
				<td>'.$row["book_start"].'</td>
                <td>'.$row["book_end"].'</td>
                <td>'.$row["food_name"].'</td>
                <td>'.$row["transportation_package"].'</td>
                <td>'.$row["venue_name"].'</td>
                <td>'.$row["booking_code"].'</td>
                <td>'.$row["booking_status"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<p style="text-align:center; transition: 0.5s;">Data Not Found</p>';
}
?> 