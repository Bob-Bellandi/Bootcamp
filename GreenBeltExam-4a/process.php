<?php
session_start();
require('connection.php');

function student_data()
{
	$student_id = $_POST['student_id'];

	$query = "SELECT exams.*, students.first_name, students.last_name
			  FROM exams
			  LEFT JOIN students on students.id = exams.student_id
			  WHERE exams.student_id = {$student_id}";
			  
	return fetch_all($query);
}

function add_exam($exam_data)
{
	$query = "INSERT INTO exams (student_id, subject, grade, teacher_note)
			  VALUES ({$exam_data['student_id']}, '{$exam_data['subject_']}',{$exam_data['grade_']},'{$exam_data['teacher_note_']}')";
	
	return mysql_query($query);
}

if(isset($_POST['action']))
{
	if($_POST['action'] == 'show_exam')
	{
		$_SESSION['student_data'] = student_data();
	}
	elseif($_POST['action'] == 'add_exam')
	{
		$add_exam = add_exam($_POST);
		//var_dump($add_exam);
	}
}

header("location:index.php");
?>