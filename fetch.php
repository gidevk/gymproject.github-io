<?php

$connect = mysqli_connect("localhost", "root", "", "mygym");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM members WHERE name LIKE '$search%' ";
	
}
else
{
	$query = "SELECT * FROM members ORDER BY name";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<div class="table-responsive" >
					<table class="table table bordered">
						<tr>
							<th>ID</th>
						    <th>name</th>
							<th>mobile</th>
							<th>email</th>
							<th>Age</th>
					
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
		<div style="padding: 10px;" >
		<td>'.$row["id"].'</td>
		<td>'.$row["name"].'</td>
		
		<td>'.$row["phone"].'</td>
		<td>'.$row["email"].'</td>
		<td>'.$row["age"].'</td>		
		</tr>';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
