<html>
<head>
	<title>Hello goorm</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>Hello goorm</h1>

    <?php
		$conn = mysqli_connect("localhost", "root", "123456", "testdb");
		
		$sql = "SELECT * FROM testtable";
		$result = mysqli_query($conn, $sql);
	
		while($row = mysqli_fetch_array($result)) {
		  echo "<li>{$row['id']} - {$row['title']}</li>";
		}
		
		?>
  
</body>
</html>