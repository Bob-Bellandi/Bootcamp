<?php
session_start();
require('connection.php');

function student_info()
{
	$student_id = $_POST['selecting_student'];
	
	$query = "SELECT exams.*, students.first_name, students.last_name 
			  FROM exams 
			  LEFT JOIN students ON students.id = exams.students_id
			  WHERE exams.students_id = {$student_id}";

    return fetch_all($query);
}	
$_SESSION['exams'] = student_info();
//header("location:index.php");

function add_info()
{
	$student_id2 = $_POST['selecting_student2'];

	$query="INSERT INTO exams (students_id, subject, grade, teacher_note)
	VALUES ({$student_id2}, '{$_POST['subject_']}',{$_POST['grade_']},'{$_POST['teacher_note_']}')";
	mysql_query($query);
}

header("location:index.php");

?>
