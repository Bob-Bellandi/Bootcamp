<?
session_start();
require("connection.php");
$query="SELECT * FROM students";
$students=fetch_all($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Green Belt Exam 5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		});	
  	</script>
</head>

<body>
	<div id="wrapper">
	<h1>Welcome, Teacher</h1>
	<form action="process.php" method="post">
		<select name="select_student">
			<?php
			foreach($students as $student)
			{
				echo "<option value=" . $student['id'] . ">" . $student['first_name'] . " " . $student['last_name'] . "</option>";	
			}	
			?>
		</select>	
		<input type="submit" value="Display Student Record">
	</form>
	<hr>

	<h3>Exam Records for <span class="highlight"> <?= $_SESSION['data'][0]['first_name'] . " "  . $_SESSION['data'][0]['last_name'] ?>  </span></h3>
	<?php $current_student_id = $_SESSION['data'][0]['students_id']; ?>
		<table>
			<thead>
			</thead>
				<tr>	
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
						Status<br> (pass / fail)
					</th>
					<th>
						Teacher's<br>Note
					</th>
				</tr>	
			<tbody>
				<?php
				$exams = $_SESSION[data];
				foreach($exams as $exam) 
				{
					echo "<tr>";
						echo "<td>". $exam['id'] . "</td>";
						echo "<td>". $exam['subject'] . "</td>";
						echo "<td>". $exam['grade'] . "</td>";
						if($exam['grade'] >= 75)
						{	
							$exam_status="Pass";
						}
						else
						{
							$exam_status="Fail";
						}
						echo "<td>". $exam_status . "</td>";
						echo "<td>". $exam['teacher_note'] . "</td>";
					echo "</tr>";	
				}
				?>
			</tbody>
		</table>
		<hr>
			<h3>Add Exam Record</h3>
			<form method="post">
				<label>Subject</label>
					<input type="text" name="subject_"><br>
				<label>&nbsp;&nbsp;&nbsp;Grade</label>
					<input type="number" name="grade_"><br>
				<textarea name="teacher_note_" cols="50" rows="4" placeholder="Teacher's note"></textarea><br>
				<input type="submit" value="Add Exam Record">
			</form>	
			<?php
			$query = 
				"INSERT INTO exams (students_id, subject, grade, teacher_note)
				VALUES (mysql_real_escape_string($current_student_id), mysql_real_escape_string('{$_POST['subject_']}'), mysql_real_escape_string($_POST['grade_']), mysql_real_escape_string('{$_POST['teacher_note_']}'))";
			mysql_query($query);	
			?>
	</div> <!-- #wrapper -->	
</body>
</html>