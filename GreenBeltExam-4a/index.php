<?php
session_start();
//session_destroy();

require('connection.php');
$query = "SELECT * FROM students";
$students = fetch_all($query);

//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Re-do 2 of Green Belt Exam</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="wrapper">
		<h1>Welcome, Teacher</h1>
		<form action="process.php" method="post">
			<select id="student_id" name="student_id">
			<?php
				foreach($students as $student)
				{
					echo "<option value=" . $student['id'] . ">" . $student['first_name'] . " " . $student['last_name'] . "</option>";
				}	
			?>
			<input type="hidden" name="action" value="show_exam">
			<input id="display" type="submit" name="specified_student" value="Display Student Record">
		</form>

		<hr>
<?php 	if(isset($_SESSION['student_data']))
		{	?>
		<div id="student_record">
			<h3>Exam Record for <span class="highlight"> <?= $_SESSION['student_data'][0]['first_name'] . " "  . $_SESSION['student_data'][0]['last_name']; ?> </span></h3>
			<table>
				<thead>
					<th>Exam ID</th>
					<th>Subject</th>
					<th>Grade</th>
					<th>Status<p>(pass/fail)</p></th>
					<th>Teacher's note</th>
				</thead>
				<tbody>
					<?php
					$exams = $_SESSION['student_data'];
					//var_dump($exams);
					foreach($exams as $exam)
					{
						if($exam['grade'] >= 75) 
						{
							$status_grade = "Pass";
						}
						else
						{
							$status_grade = "Fail";
						}	

						echo "<tr>";
							echo "<td>" . $exam['id'] . "</td>";
							echo "<td>" . $exam['subject'] . "</td>";
							echo "<td>" . $exam['grade'] . "</td>";
							echo "<td>" . $status_grade . "</td>";
							echo "<td>" . $exam['teacher_note'] . "</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div> <!-- #student_record -->	
<?php 	}	?>
<?php   if(isset($_SESSION['student_data']) && is_numeric($_SESSION['student_data'][0]['student_id']))
		{ 	?>
		<hr>
		<h3>Teacher's Notes</h3>
		<form action="process.php" method="post">
			<div>
				<label>Subject</label>
				<input type="text" name="subject_">
			</div>
			<div>
				<label>Grade</label>
				<input type="number" name="grade_">
			</div>
			<div>
				<textarea name="teacher_note_" cols="83" rows="5" placeholder="Teacher's comments"></textarea>
			</div>
			<input type="hidden" name="action" value="add_exam"/>
			<input type="hidden" name="student_id" value="<?php echo $_SESSION['student_data'][0]['student_id'];?>"/>
			<input type="submit" name="new_data" value="Submit Data">
		</form>
<?php	} ?>		
	</div> <!-- #wrapper -->
</body>
</html>