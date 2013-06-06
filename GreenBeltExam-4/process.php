<?php
session_start();
require('connection.php');

function stu_data()
{
	$stu_id = $_POST['pick_student'];

	$query = 
	"SELECT exams.*, students.first_name, students.last_name
	FROM exams
	LEFT JOIN students on students.id = exams.students_id
	WHERE exams.students_id = {$stu_id}";
	return fetch_all($query);
}
$_SESSION['data'] = stu_data();
header("location:index.php");

?>