<?
session_start();
require("connection.php");

$current_id = $_POST['select_student'];

$query = 
	"SELECT exams.*, students.first_name, students.last_name
	FROM exams
	LEFT JOIN students ON students.id = exams.students_id
	WHERE students.id = {$current_id}";

$_SESSION['data'] = fetch_all($query);

header("location:index.php");
?>