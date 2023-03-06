<html>
<head>
	<title>Add Data</title>
</head>

<?php include_once("../config.php"); ?>

<body>
	<a href="../index.php">Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<!-- <tr> 
				<td>Teacher_id</td>
				<td><input type="text" name="teacher_id"></td>
			</tr> -->
			 <!-- <tr> 
				<td>Section Name</td>
				<td><input type="text" name="section_name"></td>
			</tr>  -->

			<h1> <?php echo "Hye from PHP" ?> </h1>

			 <tr> 
				<td>Choose a section:</td>
				<td>
					<select name="section_name" id="section_name">
						<option value="">select section</option>
						<option value="A">sectionA</option>
						<option value="B">sectionB</option>
						<option value="C">sectionC</option>
						<option value="D">sectionD</option>
					</select>				
				</td>
			</tr> 

			<tr> 
				<td>Choose a Teacher:</td>
				<td>
					<!-- <select name="section_name" id="section_name"> -->
					<select name="teacher" id="teacher">
						<label for="teacher">Teacher:</label>
						<?php
						// Fetch the data from the Teacher table
						$sql = "SELECT * FROM teachers";

						$result = mysqli_query($mysqli, $sql);
						
						//print_r($result);
						
						// Loop through the data and create options for the dropdown
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<option value='".$row['id']."'>".$row['name']."</option>";
						}
						?>

					</select>				
				</td>
			</tr> 

			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

