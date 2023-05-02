<html>
<head>
	<title>Hello goorm</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>Hello goorm</h1>

    <?php
		$conn = mysqli_connect("localhost", "root", "123456", "testdb");
		
		// 	검색창으로 넘어온 값을 검색하는 코드 각 문자열을 연결시킬 때 + 가 아닌 . 을 사용
		$sql = "select * from testtable where description like '%".$_GET["search"]."%'";
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