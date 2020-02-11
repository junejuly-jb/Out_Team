<?php
$connect = mysqli_connect("localhost", "root", "", "out_team");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
    SELECT * FROM ratings join organizer on ratings.organizer_id = 
    organizer.organizer_id join service_provider on ratings.provider_id = service_provider.provider_id
	WHERE organizer.organizer_fname LIKE '%".$search."%'
	OR organizer.organizer_lname LIKE '%".$search."%'";
}
else
{
	$query = "
    SELECT * FROM ratings join organizer on ratings.organizer_id = organizer.organizer_id 
    join service_provider on ratings.provider_id = service_provider.provider_id
    ORDER BY rating_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<table class="w3-table w3-striped w3-animate-left">
						<tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Comments</th>
                            <th>Service Provider</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["organizer_fname"].' '.$row["organizer_lname"].'</td>
				<td>'.$row["rating"].' Stars</td>
                <td>'.$row["rating_comments"].'</td>
                <td>'.$row["provider_name"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<p style="text-align:center;">Data Not Found</p>';
}
?> 