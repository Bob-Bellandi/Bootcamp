<?php
	include_once("class_lib.php");

	session_start();

	$list_of_friends = array();

	$friend = new Friend();
	$friends = $friend->getFriends($_SESSION['user']['id']);
	$users = $friend->getAllUsers($_SESSION['user']['id']);

	foreach($friends as $friend)
	{
		$list_of_friends[$friend['id']] = "true";
	}

	if(!isset($_SESSION['logged_in']))
	{
		header("Location: index.php");
	}
?>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		
	});
	</script>
</head>
<body>

Welcome <?= $_SESSION['user']['first_name'] ." " . $_SESSION['user']['last_name'] ?>!

<a href="process.php">Log Off</a>

<h2>List of Friends</h2>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
		</tr>
	<thead>
	<tbody>
<?php
	foreach($friends as $friend){ ?>		
		<tr>
			<td><?= $friend['first_name'] . " " . $friend['last_name'] ?></td>
			<td><?= $friend['email']?></td>
		</tr>
<?php
	}	?>
	</tbody>
</table>


<h2>List of All Users</h2>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	<thead>
	<tbody>

<?php
	foreach($users as $user) { ?>
		<tr>
			<td><?= $user['id'] ?></td>
			<td><?= $user['first_name'] ?> <?= $user['last_name'] ?></td>
			<td><?= $user['email'] ?></td>
			<td>
<?php		
		if(isset($list_of_friends[$user['id']]))
			{
				echo "Friend";
			}
			else
			{ ?>
				<form action="process.php" method="post">
					<input type="hidden" name="action" value="makeFriend" />
					<input type="hidden" name="friend_id" value="<?= $user['id'] ?>" />
					<input type="submit" value="Add as friend" />
				</form>
<?php		}	?>
			</td>
		</tr>
<?php
	}	?>
	</tbody>
</table>

</body>
</html>
