<?php
$connect = mysqli_connect("localhost", "root", "", "out_team");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM organizer 
	WHERE organizer_fname LIKE '%".$search."%'
	OR organizer_lname LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM organizer ORDER BY organizer_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<table class="w3-table w3-striped w3-animate-left">
						<tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Company</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["organizer_fname"].' '.$row["organizer_lname"].'</td>
				<td>'.$row["organizer_email"].'</td>
                <td>'.$row["organizer_contact"].'</td>
                <td>'.$row["organizer_address"].'</td>
                <td>'.$row["company_name"].'</td>
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