<?php
session_start();
require('connection.php');

$query = "SELECT * FROM students";

$students = fetch_all($query);
//var_dump($students);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Green Belt Qualifying Exam, 5-17-2013</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
	// $(document).ready(function() {

		// $("#find_student").click(function() {
			// $("#exam_record").show();
		// });
	// });

	</script>
</head>
<body>
	<div id="wrapper">
		<div id="student_select">
			<h1>Welcome, Teacher</h1>
			<form id="specify_student" action="process.php" method="post">
				<select id="selecting_student" name="selecting_student" value=>
				<?php
					foreach($students as $student)
					{
							echo "<option value =".$student['id'].">". $student['first_name']. " " .$student['last_name'] ."</option>";
					}
				?> 
				</select>
				<input id="find_student" type="submit" value="Show Exam Record">
			</form>	
		</div> <!-- #student_select -->
		<hr>
		<div id="exam_record">
			
			<h2>Exam Record for <?= $_SESSION['exams'][0]['first_name'].$_SESSION['exams']['last_name']; ?></h2>
			<table>
				<tr>
					<th>Exam ID</th>
					<th>Subject</th>
					<th>Grade</th>
					<th>Teacher's Notes</th>
				</tr>
			<?php
			if(isset($_SESSION['exams']))
			{
				$examinations = $_SESSION['exams'];
				
				foreach($examinations as $examination)
				{
					echo "<tr>";		
						echo "<td>".$examination['id']."</td>";
						echo "<td>".$examination['subject']."</td>";
						echo "<td>".$examination['grade']."</td>";
						echo "<td>".$examination['teacher_note']."</td>";
					echo "</tr>";
				}
			}	//--end of if statement --//
			?>
			</table>	
		</div> <!-- #exam_record -->	
		<hr>
		<div id="add_record">
			<h2>Add Record</h2>
			<form id="specify_student2" action="process.php" method="post">
				<select id="selecting_student2" name="selecting_student" value=>
				<?php
					foreach($students as $student)
					{
							echo "<option value =".$student['id'].">". $student['first_name']. " " .$student['last_name'] ."</option>";
					}
				?> 
				</select>
				<input id="find_student" type="submit" value="Specify Student">
			</form>	

			<form id="add_record" action="process.php" method="post">
				<label>Subject</label>
				<input type="text" name="subject_" value=""><br>
				<label>Grade</label>
				<input type="number" name="grade_" value="">
					<br>&nbsp;<br>
				<label>Teacher's Notes</label><br>
				<textarea name="teacher_note_" cols="80" rows="5">

				</textarea><br>
				<input id="submit_add_record" type="submit" value="Add Record">
			</form>			
		</div> <!-- #add_record -->	
	</div> <!-- #wrapper -->	
</body>
</html>