<html>
<head>
<title>Web App</title>
<link rel="stylesheet" type="text/css" href="/mvc/assets/css/home.css">
</head>

<body>


<form action="" method="get">
    Name: &nbsp; <input type="text" name="name" id="name"></input> &nbsp;&nbsp;&nbsp;&nbsp;
    Country: &nbsp; <input type="text" name="country" id="country"></input> &nbsp;&nbsp;
    <input type="submit" name="submit" value="Filter"></input>
</form>

<table>
	<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Country</th>
		</tr>
	<?php 

		for($i=0;$i<count($data1);$i++)
		{
			echo '<tr><td>'.$data1[$i]["id"].'</td><td>'.$data1[$i]["name"].'</td><td>'.$data1[$i]["country"].'</td></tr>';
			
		}

	?>
</table>

</body>
</html>