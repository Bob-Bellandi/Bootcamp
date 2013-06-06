<?php
session_start();
require('connection.php');
$query = "SELECT * FROM students";
$students = fetch_all($query);
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
			<select id="pick_student" name="pick_student">
			<?php
				foreach($students as $student)
				{
					echo "<option value=" . $student['id'] . ">" . $student['first_name'] . " " . $student['last_name'] . "</option>";
				}	
			?>
			<input id="display" type="submit" name="specified_student" value="Display Student Record">
		</form>

		<hr>
		<div id="student_record">
			<h3>Exam Record for <span class="highlight"> <?= $_SESSION['data'][0]['first_name'] . " "  . $_SESSION['data'][0]['last_name']; ?> </span></h3>
			<?php $current_student_id = $_SESSION['data'][0]['students_id']; ?>
			<table>
				<thead>
					<th>
						 Exam ID
					</th>
					<th>
						 Subject
					</th>
					<th>
						 Grade
					</th>
					<th>
						 Status<br>(pass/fail)
					</th>
					<th>
						 Teacher's note
					</th>
				</thead>
				<tbody>
					<?php
					$exams = $_SESSION['data'];
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

		<hr>
		<h3>Teacher's Notes</h3>
		<form method="post">
			<label>Subject</label>
				<input type="text" name="subject_"><br>
			<label>&nbsp; Grade</label>
				<input type="number" name="grade_"><br>
			<textarea name="teacher_note_" cols="83" rows="5" placeholder="Teacher's comments"></textarea><br>
			<input type="submit" name="new_data" value="Submit Data">
			<?php
			$query = 
				"INSERT INTO exams (students_id, subject, grade, teacher_note)
			 	VALUES ({$current_student_id}, '{$_POST['subject_']}',{$_POST['grade_']},'{$_POST['teacher_note_']}')";
			 mysql_query($query);
			?>
		</form>	
	</div> <!-- #wrapper -->
</body>
</html>