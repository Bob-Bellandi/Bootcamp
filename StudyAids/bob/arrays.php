<?php 

$username = 'john';

$users = array(
	0 => array(
		'firstname' => 'Robert',
		'lastname' => 'Bellandi',
		'email' => 'bob@yahoo.com'
	),
	1 => array(
		'firstname' => 'John',
		'lastname' => 'Suspupin',
		'email' => 'john@yahoo.com'
	)
);

foreach($users as $user)
{
	echo $user['email'];
}



Alym: Can the last statement be written as echo {'email'}?

    "something".$user['email']."something else";
    "something{$user['email']}something else";