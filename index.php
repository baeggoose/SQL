<html>
<head>
	<title>Hello goorm</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>Hello goorm</h1>

    <?php
		$conn = mysqli_connect("localhost", "root", "123456", "testdb");
		
		// 	와일드카드 중 하나인 %를 사용하여 is인 키워드를 찾는 코드
		$sql = "SELECT * FROM testtable where description like '%is%'";
		$result = mysqli_query($conn, $sql);

		// bootstrap table
		echo "<table class='table table-dark'>";
		// table row
		echo "<tr><th>ID</th><th>Title</th><th>Description</th></tr>";
		while($row = mysqli_fetch_array($result)) {
		  echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['description']}</td></tr>";
		}
		echo "</table>";
		?>
  
</body>
</html>