<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");



if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$teacher_id = mysqli_real_escape_string($mysqli, $_POST['teacher_id']);
	$section_name = mysqli_real_escape_string($mysqli, $_POST['section_name']);
		
	//print_r($_POST);

	
	// checking empty fields
	 if(empty($name) || empty($teacher_id) || empty($section_name) ) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($teacher_id)) {
			echo "<font color='red'>Teacher field is empty.</font><br/>";
		}
		
		if(empty($section_name)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	
		
		//link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
	 
		// if all the fields are filled (not empty) 
			
		//insert data to database	


		$sql = "INSERT INTO classes(name,teacher_id, section_name) VALUES('$name','$teacher_id', '$section_name')";

		//print_r($sql);

		$result = mysqli_query($mysqli, $sql);
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
		//header("Location:index.php");
	}
}
?>
</body>
</html>
