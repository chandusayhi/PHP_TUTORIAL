<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php
			$array1 = array(4, 8, 15, 16, 23, 42);
			echo $array1[1];
			echo "<br />";
			$array2 = array(6, "bin", "loop", array("x", "y", "z"));
			echo $array2[3][1];
			echo "<br />";
			$array2[3] = "cat";
			echo $array2[3];
			echo "<br />";
			$array3 = array("first_name" => "chandrakant", "last_name" => "Hatti");
			echo $array3["first_name"] . " " . $array3["last_name"];
			echo "<br />";
			$array3["first_name"] = "Lohit";
			echo $array3["first_name"] . " " . $array3["last_name"];
			echo "<br />";
			print_r($array2);
		?>
	</body>
</html>
